<?php

namespace App\Http\Controllers;
use Illuminate\Database\Query\Builder;
use Illuminate\Http\Request;
use App\User;

class LoginController extends Controller
{
    public function login(){
    return view('front.user.loginstd');
    }
    public function loginprocess(Request $request){
        $email = $request->get('email');
        $password = $request->get('password');




        $checkuser = User::selectRaw("Count(*) as Total")->where('email', '=', $email)->first();

        if(intval($checkuser->Total) > 0) {
            $getpassword = User::select("password")->where('email', '=', $email)->first();
            $role_id = User::select("role_id")->where('email', '=', '$email')->first();

            if (password_verify($password,$getpassword->password)){
                $request->session()->set('email',$email);
                $request->session()->set('role_id', $role_id);



                return redirect('/');
            }
            else{
                return redirect('loginstd');
            }
        }
        else{
            return redirect('loginstd');
        }

    }

    public function logout(Request $request){
        $request->session()->flush();
        return redirect('loginstd');
    }
}
