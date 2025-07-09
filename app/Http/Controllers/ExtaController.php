<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExtaController extends Controller
{
    //
    function checkValidation(Request $request){
        return redirect(route('form.get'))->with([
            "Success" => "Form submitted successfully",
            "Name" => $request->input('name'),
            "Email" => $request->input('email'),
        ]);
    }
}
