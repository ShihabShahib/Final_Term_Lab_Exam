<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmpController extends Controller
{
    function index(){
        $user = DB::table('jobs')->get();
        return view('employee.home')->with('user', $user);
    }
    
public function create(Request $request){
    return view('employee.create');
}

 public function store(Request $request){

    $request->validate([
    
        'companyname' => 'required',
        'title'       => 'required',
        'location'    => 'required',
        'salary'      => 'required',
    ]);
    
    DB::table('jobs')
          ->insert(['company_name'      => $request->companyname,
                    'job_title'     => $request->title,
                    'job_location'     => $request->location,
                    'salary'        => $request->salary]);

    return redirect()->route('employee.home');
}

 
}