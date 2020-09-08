<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    function index(){
        return view('login.index');
    }
    function varify(Request $request){
        $request->validate([
            'username'  => 'required',
            'password'  => 'required'
        ]);

        $user = new User();
        $data = User::where('username', $request->username)
                        ->where('password', $request->password)
                        ->get();

        if(count($data) > 0 ){
            if($data[0]->type == "Admin"){
            return redirect()->route('admin.home');
            }
            if($data[0]->type == "employee"){
                return redirect()->route('employee.home');
                }
        }else{
            $request->session()->flash('msg', 'invalid username/password');
            return redirect()->route('login.index');
        }
    
    }
}

