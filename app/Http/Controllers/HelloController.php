<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    //
    function Hello(){
        $n=34;
        $m=10;
        $sum=$n+$m;
        return view('hello',['result'=>$sum]);
    }
}
