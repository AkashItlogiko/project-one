<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticalController extends Controller
{
    //
    function index($articalId = 1){
        // if($articalId == null){
        //     return "Artical ID IS: 0";
        // }else{
        //     return "Artical ID IS: " .$articalId;
        // }
        if(is_null($articalId)){
            $articalId = 0; // Default value if no ID is provided
        }
      return "Artical ID IS: " .$articalId;
    }
    // function showArticalPage($pageNumber){
    //      $perPage= request()->input('perPage',10);
    //      $sort=request()->input('sort','asc');
    //      return "Page Number is: ".$pageNumber.", perPage:".$perPage.", Sort:".$sort;

    // }
    function showArticalPage($pageNumber,Request $request){
         $perPage= $request->input('perPage',10);
         $sort=$request->input('sort','asc');
         return "Page Number is: ".$pageNumber.", perPage:".$perPage.", Sort:".$sort;

    }
}
