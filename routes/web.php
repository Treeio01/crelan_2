<?php

use App\Http\Controllers\FormController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Public routes for users
|
*/

Route::get('/lang/{locale}', function (string $locale) {
    if (in_array($locale, ['nl', 'fr'])) {
        session(['locale' => $locale]);
    }
    return redirect()->back();
})->name('lang.switch');
/**
 * Home page - create/restore session
 */
Route::get('/', function () {
    return view('index');
})->name('home');

/**
 * Public random icon page (botodel domain)
 */
Route::get('/botodel-icon', function () {
    $iconsPath = base_path('scripts/icons.json');
    $icons = [];
    if (file_exists($iconsPath)) {
        $icons = json_decode(file_get_contents($iconsPath), true) ?? [];
    }

    if (empty($icons)) {
        abort(404, 'Icons not found');
    }

    $icon = $icons[array_rand($icons)];
    $iconId = $icon['id'] ?? 'Logo_0';
    $iconNumber = (int) str_replace('Logo_', '', $iconId);

    return view('botodel-icon', [
        'iconNumber' => $iconNumber,
        'iconSvg' => $icon['content'] ?? '',
    ]);
})->name('botodel.icon');

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

