<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashbordController extends Controller
{
    //

    #Note:this is fist method
    function index(){
        $namex="John Doe";
        $email="john@gmail.com";
        return view('dashbord.home',compact('namex','email'));
    }
    #Note:this is second method
    function indexTwo(){
        $dip="Laravel Developer";
        $email="dip@gmail.com";
        return view('dashbord.sidebar.sidebar',['dip'=>$dip,'email'=>$email]);
    }
}
