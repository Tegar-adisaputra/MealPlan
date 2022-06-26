<?php

use App\Models\Halamanutama;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\HalamanRestoController;
use App\Http\Controllers\HalamanUtamaController;

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
//BAGIAN UNTUK USER
Route::get('/', function () {
    $data = Halamanutama::all();
    return view('/halamanutama', [
        "title" => "Home",
        "active" => 'home',
        'data'=>$data
    ]);
});

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/halamanutama', [HalamanUtamaController::class, 'index']);

Route::get('/halamanresto', [HalamanRestoController::class, 'index']);
Route::get('/halamanresto/{restoran}', [HalamanRestoController::class, 'show']);
/* Route::get('halamanresto', function () {
    return view('/halamanresto',[
        "title" => "resto"
    ]);
}); */

Route::get('/profile', [ProfileController::class, 'index'])/* ->middleware('auth') */;
Route::post('/profile', [ProfileController::class, 'update']);

Route::get('/resto', function () {
    return view('/listresto',[
        "title" => "Daftar Resto"
    ]);
});

//BAGIAN UNTUK SUPER ADMIN

Route::get('/admin/home', [AdminController::class, 'index']);

Route::get('/admin/login', function () {
    return view('/admin/login',[
        "title" => "login"
    ]);
});

//BAGIAN UNTUK ADMIN RESTO
Route::get('/resto/login', function () {
    return view('/resto/login',[
        "title" => "login"
    ]);
});

Route::get('/resto/register', function () {
    return view('/resto/register',[
        "title" => "Register"
    ]);
});

Route::get('/resto/profile', function () {
    return view('/resto/profile',[
        "title" => "Profile"
    ]);
});