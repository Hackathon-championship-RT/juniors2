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
use App\Models\Placement;
use App\Models\Review;
use App\Models\Sport;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class DataController extends Controller
{
    public function getData()
    {

        $requestBody = file_get_contents('php://input');
        $data = json_decode($requestBody, true);
        if($data['theme'] == 'Все') {
            $data['theme'] = null;
        }

        $theme = Category::where('name', 'like', '%'.$data['theme'].'%')->get()->toArray();
        $map = Placement::where('name', $data['map'])->first()->toArray();
        $connect = [];
        if ($data['theme'] == null) {
            $connect = CarCategeryConnect::all()->toArray();
        } else {
            $category = Category::where('name', $data['theme'])->first()->toArray();

            $connect =  CarCategeryConnect::where('category_id', $category['category_id'])->get()->toArray();
        }

        $brands = [];
        for($i = 0; $i < count($connect); $i++) {
            array_push($brands, Brand::where('brand_id', $connect[$i]['brand_id'])->first()->toArray());
        }

        if($data['complexity'] == 'hard') {
            $time = 300;
        } elseif($data['complexity'] == 'medium') {
            $time = 600;
        } else {
            $time = 900;
        }

        $response = [];
        $response['brands'] = $brands;
        $response['map'] = $map;
        $response['time'] = $time;
//        dd($response);
        return response()->json($response);
    }

    public function send_result()
    {
        $requestBody = file_get_contents('php://input');
        $user = User::where('id', Auth::id())->first()->toArray();

        $data = json_decode($requestBody, true);

        GameStory::create([
            'placement' => $data['placement'],
            'time' => $data['time'],
            'user_id' => $user['id'],
        ]);

        return response()->json($data);
    }
}
