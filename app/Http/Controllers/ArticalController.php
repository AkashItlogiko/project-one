<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticalController extends Controller
{
    //
    function index($articalId){
      return "Artical ID is:".$articalId;
    }
}
