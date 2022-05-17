<?php

use Illuminate\Support\Facades\Route;

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
    return view('splashLogin',[
        "title" => "Login"
    ]);
});
Route::get('register', function () {
    return view('/register',[
        "title" => "Register"
    ]);
});
Route::get('halamanutama', function () {
    return view('/halamanutama',[
        "title" => "Home"
    ]);
});
Route::get('halamanresto', function () {
    return view('/halamanresto',[
        "title" => "resto"
    ]);
});
Route::get('splashscreen', function () {
    return view('/splashscreen',[
        "title" => "."
    ]);
});


