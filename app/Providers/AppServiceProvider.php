<?php

declare(strict_types=1);

namespace App\Providers;

use App\Models\Session;
use App\Observers\SessionObserver;
use App\Telegram\TelegramBot;
use Illuminate\Support\ServiceProvider;
use SergiX44\Nutgram\Nutgram;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        // Регистрация Nutgram с проверкой токена (lazy loading)
        $this->app->singleton(Nutgram::class, function ($app) {
            $token = config('services.telegram.bot_token') ?? config('nutgram.token');
            
            if (empty($token)) {
                throw new \RuntimeException('TELEGRAM_BOT_TOKEN is not configured. Please set it in .env file.');
            }
            
            return new Nutgram($token);
        });
        
        // Регистрация TelegramBot как singleton (lazy loading)
        $this->app->singleton(TelegramBot::class, function ($app) {
            return new TelegramBot($app->make(Nutgram::class));
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Регистрация Observer для модели Session
        Session::observe(SessionObserver::class);
    }
}
