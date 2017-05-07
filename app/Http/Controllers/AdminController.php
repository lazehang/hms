<?php

namespace App\Http\Controllers;

use App\Account;
use App\Room;
use App\Std_Room;
use App\Student;
use App\Vaccancy;
use App\User;
use App\Role;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
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
        $rooms =  Room::all();
        return view('front.admin.register_std',['rooms' => $rooms]);

    }
    function students() {
        $students = Student::all();
        return view('front.admin.students', ['students' => $students]);
    }

    function post_student(Requests\CreateStudent $request){
        $validator = Validator::make($request->all(), [
            'email' => 'required|unique:users|max:255',
            'password' => 'required|min:6|confirmed',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }else {
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
            if ($request->hasFile('profile_pic')) {
                $image = $request->file('profile_pic');
                $filename = time() . '.' . $image->getClientOriginalExtension();
                $request->profile_pic->move(public_path('assets/images'), $filename);
                $student->profile_pic = $filename;
            }

            $user->student()->save($student);
            $user->roles()->attach(Role::where('name', 'User')->first());
            $student->rooms()->attach(Room::where('type', $request->type)->first());
            return redirect()->route('students');
        }
    }

    function edit_std( $id )
    {
        $student = Student::find($id);
        $rooms = Room::all();
        return view('front.admin.edit-std', ['student' => $student, 'rooms' => $rooms]);
    }

    public function update_std(Requests\CreateStudent $request, $id)
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

    public function view_room(){
        $rooms = Room::all()->sortBy('seats');
        return view('front.admin.room_categories', ['rooms' => $rooms]);
    }

    public function register_room(){
        return view('front.admin.register_room');
    }

    public function create_room(Requests\CreateRoom $request){

         $validator = Validator::make($request->all(), [
        'type' => 'required|unique:rooms|max:255',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }else {
            Room::create($request->all());
            return redirect()->route('room_categories')->with('success', 'Room Registered');
        }
        
    }

    public function edit_room($id){
        $room = Room::find($id);
        return view('front.admin.edit_room')->with(['room' => $room]);
    }

    public function update_room(Requests\CreateRoom $request, $id){
        $room = Room::find($id);
        $validator = Validator::make($request->all(), [
            'type' => 'required|unique:rooms,type,'.$id.',room_id|max:255',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }else {
            $room->update($request->all());
            return redirect()->route('room_categories')->with('success', 'Room Updated');
        }

    }

    public function deleteRoom($id){
        Room::destroy($id);
        return redirect()->back()->with('success', 'Room Deleted Successfully !!');
    }

    public function accounts() {
        $accounts = DB::table('stdroom')
            ->join('students', 'stdroom.std_id', '=', 'students.std_id')
            ->join('rooms', 'stdroom.room_id', '=', 'rooms.room_id')
            ->select('students.*', 'rooms.*')->orderBy('stdroom.created_at')->get();

        return view('front.admin.accounts', ['accounts' => $accounts]);
    }

    public function pay($id, $date)
    {
        $room = Std_Room::where('std_id', $id)->get()->first();
        $account = new Account([
            'std_id' => $id,
            'room_id' => $room['room_id'],
            'deadline' => $date,
        ]);
        $account->save();

        return redirect()->back()->with('success', 'Fee Paid');
    }

    public function history()
    {
        $histories = DB::table('accounts')
                        ->join('students','students.std_id', '=', 'accounts.std_id')
                        ->join('rooms', 'rooms.room_id', '=', 'accounts.room_id')
                        ->select('accounts.*','students.*', 'rooms.*')->get();
        return view('front.admin.history',['histories' => $histories]);
    }

    public function delete_account($id)
    {
        Account::destroy($id);
        return redirect()->back()->with('success', 'Account No.'.$id.' Entry has been removed');
    }

    public function password(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'password' => 'required|confirmed|min:6',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->with('validate', 'error');
        }
  
        $user = User::where('user_id', $request['id'])
                    ->get()->first();


        if (Hash::check($request['old'], $user->password))
        {
            $user->update([
                'password' => bcrypt($request['password'])
            ]);

            return redirect()->back()->with('success', 'Password Changed');
        }
        else{
//            echo "ERROR";
            return redirect()->back()->with('error', 'Password Not Changed');
        }
    }

    /**
     * Get the password reset validation rules.
     *
     * @return array
     */
    protected function rules()
    {
        return [
            'password' => 'required|confirmed|min:6',
        ];
    }

    /**
     * Get the password reset validation error messages.
     *
     * @return array
     */
    protected function validationErrorMessages()
    {
        return [];
    }


}
