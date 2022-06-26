<?php

use App\Models\Halamanutama;

use App\Http\Controllers\Admin;
use App\Http\Controllers\Admin_Resto;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\HalamanRestoController;
use App\Http\Controllers\HalamanUtamaController;
use App\Http\Controllers\Admin\HomeController;

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

Route::get('/profile', [ProfileController::class, 'index'])/* ->middleware('auth') */;
Route::post('/profile', [ProfileController::class, 'update']);

//BAGIAN UNTUK SUPER ADMIN
Route::group([
    'prefix'=>config('admin.prefix'),
    'namespace' => 'App\\Http\\Controllers',
], function () {
    Route::get('/', [Admin\LoginAdminController::class, 'formLogin']);
    Route::get('/login', [Admin\LoginAdminController::class, 'formLogin'])->name('admin.login');
    Route::post('/login', [Admin\LoginAdminController::class, 'login']);
    //Route::get('/halamanrestoranadmin', [Admin\HomeController::class, 'halaman_restoran'])->name('admin.login');

    Route::middleware(['auth:admin'])->group(function() {
        Route::post('/logout', [Admin\LoginAdminController::class, 'logout'])->name('admin.logout');
        Route::get('/home', [Admin\HomeController::class, 'index'])->name('admin.home');
        Route::get('/restoterdaftar', [Admin\HomeController::class, 'halaman_restoran']);
    });
    
});

Route::get('/resto', function () {
    return view('/listresto',[
        "title" => "Daftar Resto"
    ]);
});

//BAGIAN UNTUK SUPER ADMIN
/* 
Route::get('/admin/home', [AdminController::class, 'index']); */

//BAGIAN UNTUK ADMIN RESTO
/* Route::group([
    'prefix'=>config('admin_resto.prefix'),
    'namespace' => 'App\\Http\\Controllers',
], function () {
    Route::get('/', [Admin_Resto\LoginController::class, 'index']);
    Route::get('/login', [Admin_Resto\LoginController::class, 'index'])->name('resto.login');
    Route::post('/login', [Admin_Resto\LoginController::class, 'login']);

    Route::middleware(['auth:admin_resto'])->group(function() {
        Route::post('/logout', [Admin_Resto\LoginController::class, 'logout'])->name('resto.logout');
    });
    
}); */
/* Route::get('/resto/login', [Admin_Resto\LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/resto/login', [Admin_Resto\LoginController::class, 'authenticate']);
Route::post('/resto/logout', [Admin_Resto\LoginController::class, 'logout']);

Route::get('/resto/register', [Admin_Resto\RegisterController::class, 'index'])->middleware('guest');
Route::post('/resto/register', [Admin_Resto\RegisterController::class, 'store']);

Route::get('/resto/profile', function () {
    return view('/resto/profile',[
        "title" => "Profile"
    ]);
}); */