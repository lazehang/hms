<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;
use App\Vaccancy;
use App\Home;
use App\Room;
use App\Timetable;
use Illuminate\Support\Facades\Auth;
use App\StdRoom;

class SiteController extends Controller
{
    function index(){

        $vaccancies = Vaccancy::all();
        $home = Home::where('title', '=', 'intro')->get();



    	return view('front.user.index',['vaccancies' => $vaccancies , 'home' => $home ]);

    }
    function account(){
        $id = Auth::user()->user_id;
        $acc = Student::where('user_id', $id)->first();
        $s_id = $acc->id;
        $room = StdRoom::find($s_id);
        
    	return view('front.user.account', ['acc' => $acc, 'room' => $room]);

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
