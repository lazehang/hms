<?php

namespace App\Http\Controllers;

use App\Room;
use App\Student;
use App\Vaccancy;
use App\User;
use App\Role;
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

        $user = User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => bcrypt($request['password']),
        ]);


        $student = new Student([
        'name' => $request['name'],
        'contact' => $request['contact'],
        'address' => $request['address'],
        'school' => $request['school'],
        'father_name' => $request['father_name'],
        'father_contact' => $request['father_contact'],


        ]);
        if ($request->hasFile('profile_pic')){
            $image = $request->file('profile_pic');
            $filename=time().'.'.$image->getClientOriginalExtension();
            $request->profile_pic->move(public_path('assets/images'), $filename);
            $student->profile_pic = $filename;
        }

        $user->student()->save($student);
        $user->roles()->attach(Role::where('name', 'User')->first());
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
    public function super(){
        $users = User::all();
        return view('front.admin.super', ['users' => $users]);
    }

    public function room(){
        $students = Student::all();
        return view('front.admin.room', ['students' => $students]);
    }

    public function postAdminAssignRoles(Request $request)
    {
        $user = User::where('email', $request['email'])->first();
        $user->roles()->detach();
        if ($request['role_user']) {
            $user->roles()->attach(Role::where('name', 'User')->first());
        }
        if ($request['role_super']) {
            $user->roles()->attach(Role::where('name', 'Super')->first());
        }
        if ($request['role_admin']) {
            $user->roles()->attach(Role::where('name', 'Admin')->first());
        }
        return redirect()->back();
    }

    public function postAssignRoom(Request $request)
    {
        $student = Student::where('name', $request['name'])->first();
            $student->rooms()->detach();

        if ($request['room_1']) {
            $student->rooms()->attach(Room::where('type', 'single')->first());
        }
        if ($request['room_2']) {
            $student->rooms()->attach(Room::where('type', '2 seater')->first());
        }
        if ($request['room_3']) {
            $student->rooms()->attach(Room::where('type', '3 seater')->first());
        }
        if ($request['room_4']) {
            $student->rooms()->attach(Room::where('type', '4 seater')->first());
        }
        return redirect()->back();
    }
    
}
