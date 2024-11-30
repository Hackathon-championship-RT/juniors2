<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\CarCategeryConnect;
use App\Models\Category;
use App\Models\Event;
use App\Models\GameStory;
use App\Models\Level;
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

    public function levels()
    {
        $user = $this->GetUserId();
        $levels = Level::all()->toArray();
        for($i=0;$i<count($levels);$i++){
            $levels[$i]['category'] = Category::where('category_id', $levels[$i]['category_id'])->first()->toArray();
            list($hours, $minutes, $seconds) = explode(':', $levels[$i]['time']);
            $totalMinutes = (int)$hours * 60 + (int)$minutes;
            if ($seconds = '00'){
                $seconds = 0;
            }
            if ($minutes = '00'){
                $minutes = 0;
            }
            $levels[$i]['time'] = "Минут: $totalMinutes, Секунд: $seconds";
        }

//        dd($levels);
        return view('levels', compact('user', 'levels'));
    }

    public function home()
    {
        $user = $this->GetUserId();

        return view('home', compact('user'));
    }

    public function profile()
    {
        $user = $this->GetUserId();

        return view('profile', compact('user'));
    }

    public function level()
    {
        $user = $this->GetUserId();
        $request = request()->input();
        $level = Level::where('level_id', $request['level_id'])->first()->toArray();
        $connectbrand = CarCategeryConnect::where('category_id', $level['category_id'])->get()->toArray();
        $brands = [];
        for($i=0;$i<count($connectbrand);$i++){
            array_push($brands, Brand::where('brand_id', $connectbrand[$i]['brand_id'])->first()->toArray());
        }

//        dd($brands);
        return view('level', compact('user', 'brands', 'level'));
    }

    public function add_email()
    {
        $user = $this->GetUserId();

        if($user['email'] == null) {
            return view('add_email', compact('user'));
        } else {
            return redirect()->route('profile');
        }
    }

    public function leaderboard()
    {
        $user = $this->GetUserId();
        $game_stories = GameStory::all()->sortBy('time')->toArray();
        $levels = Level::all()->sortBy('level_number')->toArray();
        $categories = Category::all()->toArray();
        for($i=0;$i<count($game_stories);$i++){
            $game_stories[$i]['level'] = Level::where('level_id', $game_stories[$i]['level_id'])->first()->toArray();
            $game_stories[$i]['category'] = Category::where('category_id', $game_stories[$i]['level']['category_id'])->first()->toArray();
            $game_stories[$i]['user'] = User::where('id', $game_stories[$i]['user_id'])->first()->toArray();
        }

        $grouped_game_stories = collect($game_stories)->groupBy('level_id')->toArray();

//        dd($grouped_game_stories);

        return view('leaderboard', compact('user', 'game_stories', 'categories', 'grouped_game_stories', 'levels'));
    }

    public function game_story()
    {
        $user = $this->GetUserId();

        $game_stories = GameStory::where('user_id', $user['id'])->get()->toArray();
        for($i=0;$i<count($game_stories);$i++){
            $game_stories[$i]['level'] = Level::where('level_id', $game_stories[$i]['level_id'])->first()->toArray();
            $game_stories[$i]['category'] = Category::where('category_id', $game_stories[$i]['level']['category_id'])->first()->toArray();
            // сделать изменение формы времени
        }
//        dd($game_stories);
        return view('story', compact('user', 'game_stories'));
    }
}
