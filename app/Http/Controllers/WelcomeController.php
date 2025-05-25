<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
     function sayDemo(){
        return "Hello Gold";
     }

    function englishCourse(){
        return "Hello English Course";
    }
}
