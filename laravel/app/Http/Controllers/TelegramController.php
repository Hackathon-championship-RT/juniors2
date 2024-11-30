<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TelegramController extends Controller
{
    public function login_telegram() // Авторизация/Регистрация через Telegram
    {
        $telegramUser = request()->toArray();

        if(auth()->check()){
//            dd(123);
            $user = User::where('id', Auth::id())->update([
                'telegram_id' => (int)$telegramUser['telegram_user']['id'],
            ]);

            return redirect()->route('profile');
        } else {
            $user = \App\Models\User::firstOrCreate([
                'telegram_id' => (int)$telegramUser['telegram_user']['id'],
            ], [
                'telegram_id' => (int)$telegramUser['telegram_user']['id'],
                'name' => $telegramUser['telegram_user']['name'],
            ]);

            Auth::login($user);
        }

        return redirect()->route('home');
    }
}
