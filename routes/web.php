<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\HalamanUtamaController;
use App\Http\Controllers\HalamanRestoController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SplashScreenController;

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
    return view('/halamanutama', [
        "title" => "Home",
        "active" => 'home'
    ]);
});

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/halamanutama', [HalamanUtamaController::class, 'index']);

Route::get('/halamanresto', [HalamanRestoController::class, 'index']);
/* Route::get('halamanresto', function () {
    return view('/halamanresto',[
        "title" => "resto"
    ]);
}); */

Route::get('/profile', [ProfileController::class, 'index'])->middleware('auth');

