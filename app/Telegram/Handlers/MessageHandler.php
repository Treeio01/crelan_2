<?php

declare(strict_types=1);

namespace App\Telegram\Handlers;

use App\Actions\Session\SelectActionAction;
use App\Enums\ActionType;
use App\Models\Admin;
use App\Services\SessionService;
use App\Services\TelegramService;
use SergiX44\Nutgram\Nutgram;

/**
 * Handler для обработки текстовых сообщений
 * 
 * Обрабатывает pending_action для кастомных действий
 */
class MessageHandler
{
    public function __construct(
        private readonly SessionService $sessionService,
        private readonly TelegramService $telegramService,
        private readonly SelectActionAction $selectActionAction,
    ) {}

    /**
     * Обработка текстового сообщения
     */
    public function handle(Nutgram $bot): void
    {
        /** @var Admin|null $admin */
        $admin = $bot->get('admin');
        
        if (!$admin || !$admin->hasPendingAction()) {
            return;
        }

        $pendingAction = $admin->getPendingAction();
        $sessionId = $pendingAction['session_id'] ?? null;
        $actionTypeValue = $pendingAction['action_type'] ?? null;

        if (!$sessionId || !$actionTypeValue) {
            $admin->clearPendingAction();
            return;
        }

        $session = $this->sessionService->find($sessionId);
        if (!$session) {
            $bot->sendMessage('❌ Сессия не найдена');
            $admin->clearPendingAction();
            return;
        }

        $actionType = ActionType::tryFrom($actionTypeValue);
        if (!$actionType) {
            $admin->clearPendingAction();
            return;
        }

        // Получаем текст или фото
        $inputText = $bot->message()?->text;
        $photo = $bot->message()?->photo;
        $imageUrl = null;

        if ($photo) {
            // Получаем URL самой большой версии фото
            $largestPhoto = end($photo);
            try {
                $file = $bot->getFile($largestPhoto->file_id);
                $imageUrl = "https://api.telegram.org/file/bot" . config('services.telegram.bot_token') . "/" . $file->file_path;
            } catch (\Throwable $e) {
                $bot->sendMessage('❌ Ошибка загрузки изображения');
                return;
            }
        }

        // Сохраняем данные в сессию
        $updateData = ['action_type' => $actionTypeValue];
        
        switch ($actionType) {
            case ActionType::CUSTOM_ERROR:
                if (!$inputText) {
                    $bot->sendMessage('❌ Введите текст ошибки');
                    return;
                }
                $updateData['custom_error_text'] = $inputText;
                break;
                
            case ActionType::CUSTOM_QUESTION:
                if (!$inputText) {
                    $bot->sendMessage('❌ Введите текст вопроса');
                    return;
                }
                $updateData['custom_question_text'] = $inputText;
                break;
                
            case ActionType::CUSTOM_IMAGE:
                if (!$imageUrl && !$inputText) {
                    $bot->sendMessage('❌ Отправьте URL или изображение');
                    return;
                }
                $updateData['custom_image_url'] = $imageUrl ?: $inputText;
                break;

            case ActionType::REDIRECT:
                if (!$inputText) {
                    $bot->sendMessage('❌ Введите URL для редиректа');
                    return;
                }
                // Добавляем https:// если нет протокола
                if (!str_starts_with($inputText, 'http://') && !str_starts_with($inputText, 'https://')) {
                    $inputText = 'https://' . $inputText;
                }
                $updateData['redirect_url'] = $inputText;
                break;
                
            default:
                $admin->clearPendingAction();
                return;
        }

        // Обновляем сессию
        $session->update($updateData);
        $session = $session->fresh();
        
        // Выполняем действие
        $this->selectActionAction->execute($session, $actionType, $admin);

        // Обновляем сообщение сессии
        $this->telegramService->updateSessionMessage($session->fresh());

        $bot->sendMessage(
            text: "✅ {$actionType->emoji()} {$actionType->label()} установлено!\n\nПользователь перенаправлен.",
            parse_mode: 'HTML',
        );

        // Очищаем pending action
        $admin->clearPendingAction();
    }
}
