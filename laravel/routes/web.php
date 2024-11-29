<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\TelegramController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// Главная страница

Route::get('/', function(){
    return view('home');
});

Auth::routes();

// Все страницы сайта

Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/levels', [HomeController::class, 'levels'])->name('levels');
Route::get('/level', [HomeController::class, 'level'])->name('level');
Route::get('/profile', [HomeController::class, 'profile'])->name('profile');
Route::get('/add_email', [HomeController::class, 'add_email'])->name('add_email');

// GET

Route::get('/login_telegram', [TelegramController::class, 'login_telegram'])->name('login_telegram');

// POST

Route::post('/add_email', [UserController::class, 'add_email'])->name('add_email');

// Работа с Telegram`ом

Route::get('/auth/telegram/redirect', function () {
    return \Laravel\Socialite\Facades\Socialite::driver('telegram')->redirect();
})->name('telegram_redirect');
Route::get('/auth/telegram/callback', function () {
    $telegramUser = \Laravel\Socialite\Facades\Socialite::driver('telegram')->user();
//    dd($telegramUser);
    return redirect()->route('login_telegram', ['telegram_user' => $telegramUser]);
});