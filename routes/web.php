<?php

use App\Models\Halamanutama;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin_Resto\AdminRestoController;
use App\Http\Controllers\Admin_Resto\HalamanRestoranController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\HalamanRestoController;
use App\Http\Controllers\HalamanUtamaController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\BookingController;

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

Auth::routes();

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/register', [RegisterController::class, 'index'])->name('register')->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/halamanutama', [HalamanUtamaController::class, 'index'])->name('halamanutama');

Route::get('/booking', [BookingController::class, 'index'])->name('booking')->middleware('auth');
Route::post('/booking', [BookingController::class, 'store'])->name('booking');

Route::get('/halamanresto', [HalamanRestoController::class, 'index'])->name('halamanresto')->middleware('auth');
Route::get('/halamanresto/{restoran}', [HalamanRestoController::class, 'show'])->name('halamanresto')->middleware('auth');

Route::get('/profile', [ProfileController::class, 'index'])->name('profile')->middleware('auth');
Route::post('/profile', [ProfileController::class, 'update']);

Route::get('/resto', function () {
    return view('/listresto',[
        "title" => "Daftar Resto"
    ]);
})->name('listresto');

Route::get('/booking', function () {
    return view('/booking',[
        "title" => "Order Booking"
    ]);
})->name('booking');



/////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//BAGIAN UNTUK SUPER ADMIN
Route::prefix('admin')->name('admin.')->group(function(){
       
    Route::middleware(['guest:admin'])->group(function(){
          Route::view('/','admin.login',['title' => 'Login', 'active' => 'login'])->name('login');
          Route::view('/login','admin.login',['title' => 'Login', 'active' => 'login'])->name('login');
          Route::post('/check',[AdminController::class,'check'])->name('check');
    });

    Route::middleware(['auth:admin'])->group(function(){
        Route::get('/home', [AdminController::class, 'index'])->name('home');
        Route::post('/logout',[AdminController::class,'logout'])->name('logout');
        Route::get('/restoterdaftar', [AdminController::class, 'halaman_restoran']);
    });

});

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//BAGIAN UNTUK ADMIN RESTO
Route::get('/admin_resto', function () {
    return view('/admin_resto/login',[
        "title" => "Login"
    ]);
})->name('admin_resto.login')->middleware('guest:admin_resto');

Route::get('/admin_resto/register', [AdminRestoController::class, 'create'])->name('admin_resto.register')->middleware('guest:admin_resto');
Route::post('/admin_resto/register', [AdminRestoController::class, 'stored']);

Route::get('/admin_resto/login', [AdminRestoController::class, 'index'])->name('admin_resto.login')->middleware('guest:admin_resto');
Route::post('/admin_resto/login', [AdminRestoController::class, 'check']);
Route::post('/admin_resto/logout', [AdminRestoController::class, 'logout'])->name('admin_resto.logout');

Route::get('/admin_resto/profile', function () {
    return view('/admin_resto/profile',[
        "title" => "Profile"
    ]);
})->name('admin_resto.profile')->middleware('auth:admin_resto'); 

Route::get('/admin_resto/home', function () {
    return view('/admin_resto/home',[
        "title" => "Home"
    ]);
})->name('admin_resto.home')->middleware('auth:admin_resto');

Route::get('/admin_resto/history', function () {
    return view('/admin_resto/history',[
        "title" => "History"
    ]);
})->name('admin_resto.history')->middleware('auth:admin_resto');

Route::get('/admin_resto/booking', function () {
    return view('/admin_resto/booking',[
        "title" => "Booking"
    ]);
})->name('admin_resto.booking')->middleware('auth:admin_resto');

Route::get('/admin_resto/halamanrestoran/{restoran}', [HalamanRestoranController::class, 'show'])->name('admin_resto.halamanresto')->middleware('auth:admin_resto');
Route::post('/admin_resto/halamanrestoran/{id}/update', [HalamanRestoranController::class, 'update'])->name('admin_resto.halamanresto')->middleware('auth:admin_resto');

/* Route::prefix('admin_resto')->name('admin_resto.')->group(function(){

    Route::middleware(['guest:admin_resto'])->group(function(){
         Route::view('/','admin_resto.login',["title" => "Login"])->name('login');
         Route::view('/login','admin_resto.login',["title" => "Login"])->name('login');
         Route::view('/register','admin_resto.register',["title" => "Register"])->name('register');
         Route::post('/create',[AdminRestoController::class,'create'])->name('create');
         Route::post('/check',[AdminRestoController::class,'check'])->name('check');
    });

    Route::middleware(['auth:admin_resto'])->group(function(){
         Route::view('/home','admin_resto.home')->name('home');
         Route::view('/profile','admin_resto.profile',["title" => "Profile"])->name('profile');
         Route::post('/logout',[AdminRestoController::class,'logout'])->name('logout');
    });

});  */