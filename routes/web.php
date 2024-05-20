<?php declare(strict_types=1);

use \Illuminate\Support\Facades\Route;
use \Illuminate\Routing\Router;

Route::get('/login', [\App\Http\Controllers\Web\AuthController::class, 'index'])->name('index');
Route::post('/login', [\App\Http\Controllers\Web\AuthController::class, 'login'])->name('login');
Route::get('/logout', [\App\Http\Controllers\Web\AuthController::class, 'logout'])->name('logout');

/**
 * Dashboard Group.
 */
Route::group([
    'prefix' => '/', 'as' => 'web.', 'middleware' => ['auth']
], function (Router $Router) {
    $Router->resource('profile', \App\Http\Controllers\Web\ProfileController::class)->only(['index']);

    $Router->group([
        'prefix' => 'profile/', 'as' => 'profile.',
    ], function (Router $Router) {
        $Router->resource('tokens', \App\Http\Controllers\Web\Profile\PersonalAccessToken::class)->only(['store']);
    });

    $Router->resource('dashboard', \App\Http\Controllers\Web\DashboardController::class)->only(['index']);
    $Router->resource('jukebox', \App\Http\Controllers\Web\JukeBoxController::class)->only(['index']);
});
