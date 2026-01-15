<?php

use App\Http\Controllers\FormController;
use App\Telegram\TelegramBot;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Public routes for users
|
*/

/**
 * Home page - create/restore session
 */
Route::get('/', function () {
    return view('index');
})->name('home');

/**
 * Action forms
 * 
 * GET /session/{session}/action/{actionType}
 */
Route::get('/session/{session}/action/{actionType}', [FormController::class, 'show'])
    ->name('session.action');

/**
 * Waiting form
 * 
 * GET /session/{session}/waiting
 */
Route::get('/session/{session}/waiting', [FormController::class, 'waiting'])
    ->name('session.waiting');

/**
 * Telegram Webhook
 * 
 * POST /telegram/webhook
 */
Route::post('/telegram/webhook', function (TelegramBot $bot) {
    $bot->handleWebhook();
    return response()->json(['ok' => true]);
})->name('telegram.webhook');
