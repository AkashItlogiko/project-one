<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
    function  demo1(){
       return "Response Demo1";
    }
    function demo2(){
        return "Response Demo2";
    }
    function demo3(){
        return "Response Demo3";
    }
}
