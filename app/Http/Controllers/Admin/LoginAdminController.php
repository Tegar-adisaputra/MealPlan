<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
/* use Auth; */
use App\Models\admin;

class LoginAdminController extends Controller
{
    /* use AuthenticatesUsers; */
    /* protected $guard='adminMiddle';
    protected $redirectTo='/admin/home'; */
    
    public function __construct()
    {
        $this->middleware('guest:admin',['except'=>'logout']);
    }

    public function formLogin()
    {
        return view('/admin/login', [
            'title' => 'login',
            'active' => 'login'
        ]);
    }

    /* public function guard()
    {
        return auth()->guard('adminMiddle');
    } */

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        if(Auth::guard('admin')->attempt($credentials, $request->remember)) {
            $request->session()->regenerate();
            return redirect()->intended(config('admin.prefix'));
        }

        return back()->with('loginError', 'Username atau password Anda salah!');
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('admin.login');
    }
}
