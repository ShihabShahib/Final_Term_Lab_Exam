<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    function index(){
        $user = DB::table('employees')->get();
        return view('admin.home')->with('user', $user);
    }
    public function create(Request $request){
        return view('admin.create');
    }
public function store(Request $request){

        $request->validate([
            'employeename'=> 'required',
            'companyname' => 'required',
            'contact'     => 'required',
            'username'    => 'required',
            'password'    => 'required',
        ]);
        
        DB::table('employees')
              ->insert(['employeename'      => $request->employeename,
                        'companyname'     => $request->companyname,
                        'contact'        => $request->contact]);
        DB::table('users')
              ->insert(['username'      => $request->username,
                        'password'     => $request->password,
                        'type'        => "employee"]);

        return redirect()->route('admin.home');
    }
    function edit($id){

        $user = DB::table('employees')
              ->where('employeeid', $id)->first();
        return view('admin.edit')->with('user', $user);

    }
    function update($id, Request $request){

        $request->validate([
            'employeename'=> 'required',
            'companyname' => 'required',
            'contact'     => 'required'
        ]);

        DB::table('employees')->where('employeeid', $id)
              ->update(['employeename'      => $request->employeename,
                        'companyname'     => $request->companyname,
                        'contact'        => $request->contact]);

        return redirect()->route('admin.home');

    }
    function delete($id){
        
        DB::table('employees')->where('employeeid', $id)->delete();
        DB::table('users')->where('id', $id)->delete();
        return redirect()->route('admin.home');

    }
}
