<?php

namespace App\Http\Controllers;

use App\Models\CampsiteRule;
use App\Models\ContactMessage;
use App\Models\HotSpot;
use App\Models\MessageBoardItem;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $weather_data = json_decode(@file_get_contents('https://api.openweathermap.org/data/2.5/weather?lat=51.932977&lon=-5.181277&units=metric&appid=' . env('WEATHER_API')));
        // dd($weather_data);///

        $temp = $weather_data->main->temp;

        // $temp = $kelvin_temp - 273.15;

        $home_gallery = [
            'https://lh3.googleusercontent.com/p/AF1QipN3EAjTIlUDsZZDqjU13_IlKzGxzUeHHe0_ozdq=s1360-w1360-h1020',
            'https://lh3.googleusercontent.com/p/AF1QipPA6ioa3zrYuWq6BrC9IZXCu_rR7WIS0XRuZ5R-=s1360-w1360-h1020',
            'https://lh3.googleusercontent.com/p/AF1QipOWpbs5yB1ksYsxNtbr0AeSTnK56WR3fs7mDdOW=s1360-w1360-h1020',
            'https://lh3.googleusercontent.com/p/AF1QipOaEii4SJ4dw3a4i9TAIUqahhXgeETyzfndxsil=s1360-w1360-h1020',
            'https://lh3.googleusercontent.com/p/AF1QipOaqC3sCFRfyoWu2qs1mr5T0Z7oY2EkoCLTiV09=s1360-w1360-h1020',
            'https://lh3.googleusercontent.com/p/AF1QipPPzw6s15kzdvySegZjo8yyH5m2V9f3rcpWnyZK=s1360-w1360-h1020'
        ];


        return view('welcome', compact('weather_data', 'temp', 'home_gallery'));
    }

    public function dashboard()
    {
        $rules = CampsiteRule::all();
        $hotspots = HotSpot::all();
        $messages = MessageBoardItem::all();
        $contact_messages = ContactMessage::all();
        $likes = $messages->pluck('likes');
        $likes_count = array_sum($likes->toArray());



        return view('dashboard', compact('rules', 'hotspots', 'messages', 'contact_messages', 'likes_count'));
    }


    public function welcomePack()
    {
        return view('welcome.bedandbreakfast.index');
    }
}
