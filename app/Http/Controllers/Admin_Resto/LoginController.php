<?php

namespace App\Http\Controllers\Admin_Resto;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /* public function __construct()
    {
        $this->middleware('guest:admin_resto',['except'=>'logout']);
    } */

    public function index()
    {
        return view('/resto/login', [
            'title' => 'Login',
            'active' => 'login'
        ]);
    }

    /* public function login(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        if(Auth::guard('admin_resto')->attempt($credentials, $request->remember)) {
            $request->session()->regenerate();
            return redirect()->intended(config('admin_resto.prefix'));
        }

        return back()->with('loginError', 'Username atau password Anda salah!');
    }

    public function logout()
    {
        Auth::guard('admin_resto')->logout();
        return redirect()->route('admin_resto.login');
    } */

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        if(Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/resto/home');
        }

        return back()->with('loginError', 'Login tidak berhasil!');
    }

    public function logout(Request $request)
    {
        Auth::logout();
    
        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
    
        return redirect('/resto/login');
    }
}
