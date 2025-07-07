<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SimonController extends Controller
{
    //
    function sumon(){
        return "Sumon string";
    }
    function ruksana(){
        return 100;
    }
    function demo3(){
        return response()->json(['Message'=>'Login Sucessfully']);
    }
}
