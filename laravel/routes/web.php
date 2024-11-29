<?php

use App\Http\Controllers\FavouriteController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ImportController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\TelegramController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);

Auth::routes();

// Все страницы сайта

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/search', [HomeController::class, 'search'])->name('search');
Route::get('/profile', [HomeController::class, 'profile'])->name('profile');
Route::get('/event', [HomeController::class, 'event'])->name('event');
Route::get('/favourites', [HomeController::class, 'favourites'])->name('favourites');
Route::get('/notifications', [HomeController::class, 'notifications'])->name('notifications');
Route::get('/login_telegram', [TelegramController::class, 'login_telegram'])->name('login_telegram');
Route::get('/add_email', [HomeController::class, 'add_email'])->name('add_email');
Route::get('/add_notification', [HomeController::class, 'add_notification'])->name('add_notification');

// Все GET функции сайта

Route::get('/filter_search', [SearchController::class, 'filter_search'])->name('filter_search');
Route::get('/add_favourite', [FavouriteController::class, 'add_favourite'])->name('add_favourite');
Route::get('/remove_favourite', [FavouriteController::class, 'remove_favourite'])->name('remove_favourite');
Route::get('/delete_notification', [NotificationController::class, 'delete_notification'])->name('delete_notification');

// Все POST функции сайта

Route::post('/add_email', [UserController::class, 'add_email'])->name('add_email');
Route::post('/add_review', [ReviewController::class, 'add_review'])->name('add_review');
Route::post('/add_photo', [UserController::class, 'add_photo'])->name('add_photo');
Route::post('/add_notification', [NotificationController::class, 'add_notification'])->name('add_notification');

// Работа с Telegram`ом

Route::get('/auth/telegram/redirect', function () {
    return \Laravel\Socialite\Facades\Socialite::driver('telegram')->redirect();
})->name('telegram_redirect');
Route::get('/auth/telegram/callback', function () {
    $telegramUser = \Laravel\Socialite\Facades\Socialite::driver('telegram')->user();
//    dd((int)$telegramUser->getId());
    return redirect()->route('login_telegram', ['telegram_user' => $telegramUser]);
//

//
//    return redirect()->route('home');
});
