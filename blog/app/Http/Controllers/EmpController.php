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
 
}