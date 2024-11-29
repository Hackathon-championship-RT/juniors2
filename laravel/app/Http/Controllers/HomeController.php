<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Notification;
use App\Models\Participation;
use App\Models\Review;
use App\Models\Sport;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable

     */

    public function GetUserId() // Функция для нахождения записи пользователя в бд, которая будет вызываться в других контроллерах
    {
        $id = Auth::id();
        $user = User::where('id', $id)->first();
        $user['currenttime'] = Carbon::now()->format('Y-m-d');

        return $user;
    }
}
