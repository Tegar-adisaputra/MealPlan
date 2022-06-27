<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\admin;
use App\Models\Admin\Home;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function index()
    {
        $data = Home::all();
        return view('/admin/home',  [
            'title' => 'Home',
            'active' => 'halamanutama',
            'data'=>$data
        ]);
    }

    function check(Request $request)
    {
        //Validate Inputs
        $request->validate([
           'username'=>'required',
           'password'=>'required'
        ]);

        $creds = $request->only('username','password');

        if( Auth::guard('admin')->attempt($creds) ){
            return redirect()->route('admin.home');
        }else{
            return redirect()->route('admin.login')->with('fail','Login tidak berhasil!');
        }
   }

   function logout()
   {
        Auth::guard('admin')->logout();
        return redirect()->intended(route('admin.login'));
    }

    public function halaman_restoran()
    {
        $data = Home::all();
        return view('/admin/halamanrestoranadmin',[
            'title' => 'Home',
            'active' => 'halamanutama',
            'data'=>$data
        ]);
    }
}
