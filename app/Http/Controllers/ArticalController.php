<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticalController extends Controller
{
    //
    function index($articalId){
      return "Artical ID IS: " .$articalId;
    }
    function showArticalPage($pageNumber,$type){
        return 'Artical Page Number IS:'.$pageNumber.'Type IS: '.$type;
    }
}
