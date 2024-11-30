<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function add_email() // Функция добавления электронной почты и пароля к пользователю
    {
        $request = request()->validate([
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],
        ], [
            'email.required' => "Пожалуйста, введите ваш адрес электронной почты.",
            'email.email' => "Пожалуйста, введите действительный адрес электронной почты.",
            'email.max' => "Адрес электронной почты не должен превышать 255 символов.",
            'email.unique' => "Этот адрес электронной почты уже зарегистрирован. Пожалуйста, используйте другой.",
            'password.required' => "Пожалуйста, введите пароль.",
            'password.min' => "Пароль должен содержать не менее 8 символов.",
        ]);

        User::where('id', Auth::id())->update([
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);

        return redirect()->route('profile');
    }

    public function add_avatar() // Функция добавления фотографии пользователю и сохранение в системе и в таблице данных
    {
        $request = request()->validate([
            'avatar' => ['required'],
        ]);
        $path = request()->file('avatar')->store('users', 'public');

        User::where('id', Auth::id())->update([
            'avatar' => $path,
        ]);

        return redirect()->route('profile');
    }
}
