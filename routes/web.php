<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//view page
Route::get('/test','test@index');

//view parameter
Route::get('/test/{id}', function ($id) {
    //data type 1
    // return view('pagetest1')->with("data",$id); // data = name , $id = value
    //data type 2
    // $any = [$id,$id,$id];
    return view('pagetest1')->with("data"); // data = name , $id = value
    // return "<p>".$id."</p>";

    // return $any;
});
