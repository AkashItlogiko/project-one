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
        return redriect('/simon');
    }
    function image(){
        $path=storage_path('app/public/img.jpg');;
        return response()->download($path);
    }
    function images(){

        return response('Hello')->header('my-token','Ostad1234');
    }
    function new(Request $request){
          $a=$request->num1;
          $b=$request->num2;
          return $a+$b;
    }

    function requestbody(Request $request){
        $data=$request->input();
        $a=$data['name1'];
        $b=$data['name2'];
        return $a+$b;
    }


}
