<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vaccancy;
use App\Home;
use App\Room;
use App\Timetable;
class SiteController extends Controller
{
    function index(){

        $vaccancies = Vaccancy::all();
        $home = Home::where('title', '=', 'intro')->get();



    	return view('front.user.index',['vaccancies' => $vaccancies , 'home' => $home ]);

    }
    function account(){

    	return view('front.user.account');

    }
    function news(){
        $vaccancies = Vaccancy::all();
    	return view('front.user.news',['vaccancies' => $vaccancies]);

    }
    function details(){
        $rooms= Room::all();
        $timetables= Timetable::all();



        return view('front.user.details',['rooms' => $rooms, 'timetables' => $timetables]);

    }

}
