<?php

use App\Models\Halamanutama;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin_Resto\AdminRestoController;
use App\Http\Controllers\Admin_Resto\HalamanRestoranController;
use App\Http\Controllers\Admin_Resto\ProfileRestoController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\HalamanRestoController;
use App\Http\Controllers\HalamanUtamaController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\HistoryController;

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

Route::get('/booking/{restoran}', [BookingController::class, 'show'])->name('booking')->middleware('auth');
Route::post('/booking', [BookingController::class, 'store'])->name('booking');

Route::get('/halamanresto', [HalamanRestoController::class, 'index'])->name('halamanresto')->middleware('auth');
Route::get('/halamanresto/{restoran}', [HalamanRestoController::class, 'show'])->name('halamanresto')->middleware('auth');

Route::get('/profile', [ProfileController::class, 'index'])->name('profile')->middleware('auth');
Route::post('/profile', [ProfileController::class, 'update']);

Route::get('/history', [HistoryController::class, 'index'])->name('history')->middleware('auth');
//Route::get('/history/{user}', [HistoryController::class, 'show'])->name('history')->middleware('auth');

Route::get('/resto', function () {
    return view('/listresto',[
        "title" => "Daftar Resto"
    ]);
})->name('listresto');

Route::get('/booking', [BookingController::class, 'index'])->name('booking');


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
        Route::post('/restoterdaftar', [AdminController::class, 'stored'])->name('halaman_restoran');
        Route::get('/history', [AdminController::class, 'history'])->name('history');
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
Route::post('/admin_resto/register', [AdminRestoController::class, 'stored'])->name('admin_resto.create');

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

Route::get('/admin_resto/history/{restoran}', [App\Http\Controllers\Admin_Resto\HistoryController::class, 'show'])->name('admin_resto.history')->middleware('auth:admin_resto');

Route::get('/admin_resto/booking/{restoran}', [App\Http\Controllers\Admin_Resto\BookingController::class, 'show'])->name('admin_resto.booking')->middleware('auth:admin_resto');
Route::post('/admin_resto/booking/{id}/update', [App\Http\Controllers\Admin_Resto\BookingController::class, 'update'])->name('admin_resto.updatetanggal')->middleware('auth:admin_resto');
Route::get('/admin_resto/booking/{id}/setuju', [App\Http\Controllers\Admin_Resto\BookingController::class, 'setuju'])->name('admin_resto.setuju')->middleware('auth:admin_resto');
Route::get('/admin_resto/booking/{id}/tolak', [App\Http\Controllers\Admin_Resto\BookingController::class, 'tolak'])->name('admin_resto.tolak')->middleware('auth:admin_resto');

Route::get('/admin_resto/halamanrestoran/{restoran}', [HalamanRestoranController::class, 'show'])->name('admin_resto.showresto')->middleware('auth:admin_resto');
Route::post('/admin_resto/halamanrestoran/{id}/update', [HalamanRestoranController::class, 'update'])->name('admin_resto.updateresto')->middleware('auth:admin_resto');


Route::get('/admin_resto/profile/{restoran}', [ProfileRestoController::class, 'show'])->name('admin_resto.showprofile')->middleware('auth:admin_resto');
Route::post('/admin_resto/profile/{id}/update', [ProfileRestoController::class, 'update'])->name('admin_resto.updateprofile')->middleware('auth:admin_resto');