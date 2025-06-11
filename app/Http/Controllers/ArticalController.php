<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticalController extends Controller
{
    //
    function index($articalId){
      return "Artical ID IS: " .$articalId;
    }
    function showArticalPage($pageNumber){
        return 'Artical Page Number IS:'.$pageNumber;
    }
}
