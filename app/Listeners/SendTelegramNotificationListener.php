<?php

declare(strict_types=1);

namespace App\Listeners;

use App\Events\ActionSelected;
use App\Events\FormSubmitted;
use App\Events\SessionAssigned;
use App\Events\SessionCreated;
use App\Events\SessionStatusChanged;
use App\Events\SessionUnassigned;
use App\Services\SessionService;
use App\Services\TelegramService;

/**
 * Listener для отправки уведомлений в Telegram
 * 
 * Синхронная обработка (без очередей) чтобы избежать дублирования
 */
class SendTelegramNotificationListener
{
    public function __construct(
        private readonly TelegramService $telegramService,
        private readonly SessionService $sessionService,
    ) {}

    /**
     * Обработка события создания сессии
     */
    public function handleSessionCreated(SessionCreated $event): void
    {
        // Отправляем уведомление в группу или всем админам
        $results = $this->telegramService->sendNewSessionNotification($event->session);

        // Сохраняем message_id и chat_id первого успешного сообщения
        foreach ($results as $key => $result) {
            if ($result['success'] && isset($result['message_id'])) {
                $chatId = $result['chat_id'] ?? null;
                $this->sessionService->updateTelegramMessage(
                    $event->session,
                    $result['message_id'],
                    $chatId
                );
                break;
            }
        }
    }

    /**
     * Обработка события назначения админа
     */
    public function handleSessionAssigned(SessionAssigned $event): void
    {
        $this->telegramService->updateSessionMessage($event->session);
    }

    /**
     * Обработка события открепления админа
     */
    public function handleSessionUnassigned(SessionUnassigned $event): void
    {
        $this->telegramService->updateSessionMessage($event->session);
    }

    /**
     * Обработка события отправки формы
     */
    public function handleFormSubmitted(FormSubmitted $event): void
    {
        // Обновляем основное сообщение с новыми данными
        // Данные сохраняются в сессии и отображаются в formatSessionMessage
        $this->telegramService->updateSessionMessage($event->session);
    }

    /**
     * Обработка события изменения статуса
     */
    public function handleSessionStatusChanged(SessionStatusChanged $event): void
    {
        // Обновляем сообщение
        $this->telegramService->updateSessionMessage($event->session);

        // Отправляем уведомление о завершении/отмене
        if ($event->isCompleted()) {
            $this->telegramService->sendSessionUpdate(
                $event->session,
                '✅ <b>Сессия завершена</b>'
            );
        } elseif ($event->isCancelled()) {
            $this->telegramService->sendSessionUpdate(
                $event->session,
                '❌ <b>Сессия отменена</b>'
            );
        }
    }

    /**
     * Обработка события выбора действия
     */
    public function handleActionSelected(ActionSelected $event): void
    {
        $this->telegramService->updateSessionMessage($event->session);
    }

    /**
     * Подписка на события
     */
    public function subscribe($events): array
    {
        return [
            SessionCreated::class => 'handleSessionCreated',
            SessionAssigned::class => 'handleSessionAssigned',
            SessionUnassigned::class => 'handleSessionUnassigned',
            FormSubmitted::class => 'handleFormSubmitted',
            SessionStatusChanged::class => 'handleSessionStatusChanged',
            ActionSelected::class => 'handleActionSelected',
        ];
    }
}
