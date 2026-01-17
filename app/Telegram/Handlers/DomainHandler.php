<?php

declare(strict_types=1);

namespace App\Telegram\Handlers;

use App\Models\Admin;
use App\Models\Domain;
use App\Services\CloudflareService;
use SergiX44\Nutgram\Nutgram;
use SergiX44\Nutgram\Telegram\Types\Keyboard\InlineKeyboardButton;
use SergiX44\Nutgram\Telegram\Types\Keyboard\InlineKeyboardMarkup;

/**
 * Handler для управления доменами через Cloudflare
 * 
 * Команды:
 * - /domain add {domain} {ip} — добавить домен
 * - /domain edit {domain} {ip} — изменить IP домена
 * - /domain info {domain} — информация о домене
 * - /domain list — список доменов
 */
class DomainHandler
{
    public function __construct(
        private readonly CloudflareService $cloudflareService,
    ) {}

    /**
     * Обработка команды /domain
     */
    public function handle(Nutgram $bot): void
    {
        /** @var Admin $admin */
        $admin = $bot->get('admin');

        $text = $bot->message()->text ?? '';
        $parts = explode(' ', $text, 4);

        if (count($parts) < 2) {
            $this->showHelp($bot);
            return;
        }

        $action = strtolower($parts[1] ?? '');

        match ($action) {
            'add' => $this->addDomain($bot, $admin, $parts),
            'edit' => $this->editDomain($bot, $admin, $parts),
            'info' => $this->infoDomain($bot, $parts),
            'list' => $this->listDomains($bot),
            default => $this->showHelp($bot),
        };
    }

    /**
     * Показать справку
     */
    private function showHelp(Nutgram $bot): void
    {
        $text = <<<TEXT
🌐 <b>Управление доменами Cloudflare</b>

<b>Команды:</b>
<code>/domain add {domain} {ip}</code> — добавить домен
<code>/domain edit {domain} {ip}</code> — изменить IP домена
<code>/domain info {domain}</code> — информация о домене
<code>/domain list</code> — список всех доменов

<b>Примеры:</b>
<code>/domain add example.com 192.168.1.1</code>
<code>/domain edit example.com 192.168.1.2</code>
<code>/domain info example.com</code>
TEXT;

        $bot->sendMessage(
            text: $text,
            parse_mode: 'HTML',
        );
    }

    /**
     * Добавить домен
     */
    private function addDomain(Nutgram $bot, Admin $admin, array $parts): void
    {
        if (count($parts) < 4) {
            $bot->sendMessage(
                text: "❌ <b>Использование:</b>\n\n<code>/domain add {domain} {ip}</code>\n\nПример: <code>/domain add example.com 192.168.1.1</code>",
                parse_mode: 'HTML',
            );
            return;
        }

        $domain = trim($parts[2]);
        $ip = trim($parts[3]);

        // Валидация домена
        if (!filter_var($domain, FILTER_VALIDATE_DOMAIN) && !preg_match('/^[a-z0-9]([a-z0-9-]{0,61}[a-z0-9])?(\.[a-z0-9]([a-z0-9-]{0,61}[a-z0-9])?)*$/i', $domain)) {
            $bot->sendMessage('❌ Неверный формат домена');
            return;
        }

        // Валидация IP
        if (!filter_var($ip, FILTER_VALIDATE_IP)) {
            $bot->sendMessage('❌ Неверный формат IP адреса');
            return;
        }

        // Проверяем, существует ли уже домен
        $existingDomain = Domain::where('domain', $domain)->first();
        if ($existingDomain) {
            $bot->sendMessage("❌ Домен <code>{$domain}</code> уже существует", parse_mode: 'HTML');
            return;
        }

        try {
            $bot->sendMessage("⏳ Добавляю домен <code>{$domain}</code>...", parse_mode: 'HTML');

            // Создаем зону в Cloudflare
            $zone = $this->cloudflareService->createZone($domain);
            $zoneId = $zone['id'] ?? null;

            if (!$zoneId) {
                throw new \RuntimeException('Не удалось создать зону в Cloudflare');
            }

            // Добавляем A запись
            $this->cloudflareService->setARecord($zoneId, $domain, $ip, 3600, true);

            // Устанавливаем SSL режим на flexible
            $this->cloudflareService->setSslMode($zoneId, 'flexible');

            // Получаем NS записи
            $nameservers = $this->cloudflareService->getZoneNameservers($zoneId);

            // Сохраняем в БД
            $domainModel = Domain::create([
                'domain' => $domain,
                'zone_id' => $zoneId,
                'ip_address' => $ip,
                'nameservers' => $nameservers,
                'ssl_mode' => 'flexible',
                'status' => 'active',
                'admin_id' => $admin->id,
                'is_active' => true,
            ]);

            // Проверяем доступность
            $isAvailable = $this->cloudflareService->checkDomainAvailability($domain);

            $statusEmoji = $isAvailable ? '✅' : '⚠️';
            $statusText = $isAvailable ? 'Работает' : 'Не доступен';

            $text = <<<TEXT
✅ <b>Домен добавлен!</b>

🌐 <b>Домен:</b> <code>{$domain}</code>
📍 <b>IP:</b> <code>{$ip}</code>
🔒 <b>SSL:</b> Flexible
{$statusEmoji} <b>Статус:</b> {$statusText}

<b>NS записи:</b>
<code>{$this->formatNameservers($nameservers)}</code>

💡 <i>Используйте эти NS записи для настройки домена у регистратора</i>
TEXT;

            $bot->sendMessage(
                text: $text,
                parse_mode: 'HTML',
            );

        } catch (\Throwable $e) {
            $bot->sendMessage(
                text: "❌ <b>Ошибка:</b> {$e->getMessage()}",
                parse_mode: 'HTML',
            );
        }
    }

    /**
     * Редактировать IP домена
     */
    private function editDomain(Nutgram $bot, Admin $admin, array $parts): void
    {
        if (count($parts) < 4) {
            $bot->sendMessage(
                text: "❌ <b>Использование:</b>\n\n<code>/domain edit {domain} {ip}</code>\n\nПример: <code>/domain edit example.com 192.168.1.2</code>",
                parse_mode: 'HTML',
            );
            return;
        }

        $domain = trim($parts[2]);
        $newIp = trim($parts[3]);

        // Валидация IP
        if (!filter_var($newIp, FILTER_VALIDATE_IP)) {
            $bot->sendMessage('❌ Неверный формат IP адреса');
            return;
        }

        $domainModel = Domain::where('domain', $domain)->first();
        if (!$domainModel) {
            $bot->sendMessage("❌ Домен <code>{$domain}</code> не найден", parse_mode: 'HTML');
            return;
        }

        if (!$domainModel->zone_id) {
            $bot->sendMessage("❌ У домена не указан Zone ID");
            return;
        }

        try {
            $bot->sendMessage("⏳ Обновляю IP для <code>{$domain}</code>...", parse_mode: 'HTML');

            // Обновляем A запись
            $this->cloudflareService->setARecord($domainModel->zone_id, $domain, $newIp, 3600, true);

            // Обновляем в БД
            $domainModel->update([
                'ip_address' => $newIp,
            ]);

            // Проверяем доступность
            $isAvailable = $this->cloudflareService->checkDomainAvailability($domain);
            $statusEmoji = $isAvailable ? '✅' : '⚠️';
            $statusText = $isAvailable ? 'Работает' : 'Не доступен';

            $text = <<<TEXT
✅ <b>IP обновлен!</b>

🌐 <b>Домен:</b> <code>{$domain}</code>
📍 <b>Новый IP:</b> <code>{$newIp}</code>
{$statusEmoji} <b>Статус:</b> {$statusText}
TEXT;

            $bot->sendMessage(
                text: $text,
                parse_mode: 'HTML',
            );

        } catch (\Throwable $e) {
            $bot->sendMessage(
                text: "❌ <b>Ошибка:</b> {$e->getMessage()}",
                parse_mode: 'HTML',
            );
        }
    }

    /**
     * Информация о домене
     */
    private function infoDomain(Nutgram $bot, array $parts): void
    {
        if (count($parts) < 3) {
            $bot->sendMessage(
                text: "❌ <b>Использование:</b>\n\n<code>/domain info {domain}</code>\n\nПример: <code>/domain info example.com</code>",
                parse_mode: 'HTML',
            );
            return;
        }

        $domain = trim($parts[2]);
        $domainModel = Domain::where('domain', $domain)->first();

        if (!$domainModel) {
            $bot->sendMessage("❌ Домен <code>{$domain}</code> не найден", parse_mode: 'HTML');
            return;
        }

        try {
            // Получаем актуальную информацию из Cloudflare
            $zoneStatus = [];
            if ($domainModel->zone_id) {
                $zoneStatus = $this->cloudflareService->getZoneStatus($domainModel->zone_id);
            }

            // Проверяем доступность
            $isAvailable = $this->cloudflareService->checkDomainAvailability($domain);
            $statusEmoji = $isAvailable ? '✅' : '⚠️';
            $statusText = $isAvailable ? 'Работает' : 'Не доступен';

            $text = <<<TEXT
🌐 <b>Информация о домене</b>

<b>Домен:</b> <code>{$domainModel->domain}</code>
📍 <b>IP:</b> <code>{$domainModel->ip_address ?? 'Не указан'}</code>
🔒 <b>SSL:</b> {$domainModel->ssl_mode}
{$statusEmoji} <b>Статус:</b> {$statusText}

<b>NS записи:</b>
<code>{$this->formatNameservers($domainModel->nameservers)}</code>
TEXT;

            if ($domainModel->admin) {
                $adminName = $domainModel->admin->username 
                    ? "@{$domainModel->admin->username}" 
                    : "ID:{$domainModel->admin->telegram_user_id}";
                $text .= "\n\n👤 <b>Добавил:</b> {$adminName}";
            }

            $text .= "\n📅 <b>Добавлен:</b> {$domainModel->created_at->format('d.m.Y H:i')}";

            $bot->sendMessage(
                text: $text,
                parse_mode: 'HTML',
            );

        } catch (\Throwable $e) {
            $bot->sendMessage(
                text: "❌ <b>Ошибка:</b> {$e->getMessage()}",
                parse_mode: 'HTML',
            );
        }
    }

    /**
     * Список доменов
     */
    private function listDomains(Nutgram $bot): void
    {
        $domains = Domain::where('is_active', true)
            ->orderBy('created_at', 'desc')
            ->limit(20)
            ->get();

        if ($domains->isEmpty()) {
            $bot->sendMessage('📋 Список доменов пуст');
            return;
        }

        $text = "📋 <b>Список доменов:</b>\n\n";

        foreach ($domains as $domain) {
            $isAvailable = $this->cloudflareService->checkDomainAvailability($domain->domain);
            $statusEmoji = $isAvailable ? '✅' : '⚠️';
            
            $text .= "{$statusEmoji} <code>{$domain->domain}</code>\n";
            $text .= "   └ IP: <code>{$domain->ip_address ?? 'Не указан'}</code>\n\n";
        }

        $bot->sendMessage(
            text: $text,
            parse_mode: 'HTML',
        );
    }

    /**
     * Форматировать NS записи
     */
    private function formatNameservers(?array $nameservers): string
    {
        if (empty($nameservers) || !is_array($nameservers)) {
            return 'Не указаны';
        }

        return implode("\n", $nameservers);
    }
}
