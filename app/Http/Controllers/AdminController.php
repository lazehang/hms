<?php

namespace App\Http\Controllers;

use App\Room;
use App\Student;
use App\Vaccancy;
use Illuminate\Http\Request;
use App\Http\Requests;
use Symfony\Component\DomCrawler\Image;

class AdminController extends Controller
{
    function index()
    {
        $vaccancy = Vaccancy::get()->count();
        $room = Room::get()->count();
        $seat = Vaccancy::all()->sum('seats');
        $student = Student::get()->count();
    	return view('front.admin.index', ['vaccancy' => $vaccancy, 'room' => $room, 'seat' => $seat, 'student' => $student]);
    }

    function register_std(){

        return view('front.admin.register_std');

    }
    function students() {
        $students = Student::all();
        return view('front.admin.students', ['students' => $students]);
    }

    function post_student(Requests\CreateStudent $request){

        $student = new Student;
        $student->name = $request['name'];
        $student->contact = $request['contact'];
        $student->address = $request['address'];
        $student->school = $request['school'];
        $student->father_name = $request['father_name'];
        $student->father_contact = $request['father_contact'];

        if ($request->hasFile('profile_pic')){
            $image = $request->file('profile_pic');
            $filename=time().'.'.$image->getClientOriginalExtension();
            $request->profile_pic->move(public_path('assets/images'), $filename);
            $student->profile_pic = $filename;
        }

        $student->save();
//        $this->validate($request, [
//            'profile_pic' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:1024',
//        ]);
//        $imageName = time().'.'.$request->profile_pic->getClientOriginalExtension();
//        $request->profile_pic->move(public_path('assets/images'), $imageName);
//        $request->save();
//
//
//        Student::create($request->all());
        return redirect()->route('students');

    }


    
}
