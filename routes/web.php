<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\ExtaController;
use App\Http\Controllers\DemosController;
use App\Http\Controllers\SimonController;
use App\Http\Controllers\ArticalController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\DashbordController;



Route::get('/', function () {
    return view('welcome');
});

Route::get("/hello",[WelcomeController::class,'sayDemo']);
Route::get("/english",[WelcomeController::class,'englishCourse']);
Route::get('/dashbord',[DashbordController::class,'index']);
Route::get('/dashbord/sidebar',[DashbordController::class,'indexTwo']);

// Route::get('/hello', function () {
//     return('Hello World');
// });

Route::get('/laravel', function () {
    return('Hello Laravel');
});

Route::get('/artical/{articalId?}',[ArticalController::class,'index']);
Route::get('/artical/page/{pageNumber}',[ArticalController::class,'showArticalPage']);
Route::get('/demo1',[DemoController::class,'demo1']);
Route::post('/demo2',[DemoController::class,'demo2']);
Route::post('/demo4',[DemoController::class,'demo4']);
Route::view("/loginform","forms.login");
Route::view("/form","forms.form");
Route::view("/contactform","forms.contact");
Route::view('form.get',[ExtaController::class,'checkValidation']);
Route::get("/simon",[SimonController::class,'sumon']);
Route::get('/ruksana',[SimonController::class,'ruksana']);
Route::get('/demos',[SimonController::class,'demo3']);
Route::get('/image',[SimonController::class,'image']);
Route::get('/images',[SimonController::class,'images']);
Route::get('/new/{num1}/{num2}',[SimonController::class,'new']);
Route::post('/request',[SimonController::class,'requestbody']);
Route::post('/requestheaders',[SimonController::class,'requestHeaders']);
Route::post('/ip',[SimonController::class,'index']);


