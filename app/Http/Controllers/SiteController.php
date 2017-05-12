<?php

namespace App\Http\Controllers;

use App\Account;
use App\Student;
use Carbon\Carbon;
use Faker\Provider\DateTime;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Vaccancy;
use App\Home;
use App\Room;
use App\Timetable;
use Illuminate\Support\Facades\Auth;
use App\Std_Room;
use Illuminate\Support\Facades\DB;

class SiteController extends Controller
{
    function index(){

        $vaccancies = Vaccancy::all();
        $homes = Home::all();

    	return view('front.user.index',['vaccancies' => $vaccancies , 'homes' => $homes ]);
    }
    function account(){
        $id = Auth::user()->user_id;
        $acc = Student::where('user_id', $id)->first();
        $s_id = $acc->std_id;
        $histories = DB::table('accounts')
            ->join('students','students.std_id', '=', 'accounts.std_id')
            ->join('rooms', 'rooms.room_id', '=', 'accounts.room_id')
            ->select('accounts.*','students.*', 'rooms.*')
            ->where('students.std_id', '=', $s_id)->get();

        $room = Std_Room::where('std_id', $s_id)->first();

        $old = Carbon::parse($room->created_at);

        $old->addMonth(1);

        $fee_account = Account::where('std_id', $s_id)
                                ->orderBy('deadline', 'desc')
                                ->get()->first();

        //if fee has been paid
        if (!empty($fee_account))
        {
            $old = Carbon::parse($fee_account->deadline);
            $old->addMonth();
        }

        $date = Carbon::now()->diffInDays($old);

        $accounts = DB::table('stdroom')
                        ->join('students', 'stdroom.std_id', '=', 'students.std_id')
                        ->join('rooms', 'stdroom.room_id', '=', 'rooms.room_id')
                        ->where('stdroom.std_id', $s_id)
                        ->select('students.*', 'rooms.*')->get();

        return view('front.user.account', ['acc' => $acc, 'room' => $room , 'date' => $date, 'accounts' => $accounts, 'old' => $old, 'histories' => $histories]);

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

    function contact()
    {
        return view('front.user.contact');
    }

    function edit()
    {
        $user = Student::where('user_id', Auth::user()->user_id)->get()->first();
//        dump($user);
        $id = $user['std_id'];
        $student = Student::find($id);
        $rooms = Room::all();
        return view('front.user.edit-std', ['student' => $student, 'rooms' => $rooms]);
    }

    public function update(Requests\CreateStudent $request, $id)
    {
        $student = Student::find($id);
        if ($request->hasFile('profile_pic')) {
            $image = $request->file('profile_pic');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $request->profile_pic->move(public_path('assets/images'), $filename);
            $student->profile_pic = $filename;
        }
        $student->update([
            'name' => $request['name'],
            'contact' => $request['contact'],
            'address' => $request['address'],
            'school' => $request['school'],
            'father_name' => $request['father_name'],
            'father_contact' => $request['father_contact'],
        ]);

        $student->rooms()->detach();
        $student->rooms()->attach(Room::where('type', $request->type)->first());
        return redirect()->route('account');
    }

}
