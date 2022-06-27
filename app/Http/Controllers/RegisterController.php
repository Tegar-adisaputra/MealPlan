<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class RegisterController extends Controller
{
    public function index()
    {
        return view('/register', [
            'title' => 'Register',
            'active' => 'register'
        ]);
    }

    public function store(Request $request)
    {
        /* $request->validate([
            'username' => 'required|min:5|max:255|unique:users|unique:admins|unique:admin_restos',
            'email' => 'required|email:dns|unique:users|unique:admins|unique:admin_restos',
            'password' => 'required|min:5|max:13'
        ]);

        $user = new User();
        $user->username = $request->username;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $res = $user->save();
        if($res){
            return back()->with('success','Anda telah berhasil melakukan registrasi!');
        } else {
            return back()->with('fail','Maaf, ada kesalahan saat melakukan registrasi. Silakan daftar ulang!');
        } */
        $validatedData = $request->validate([
            'username' => 'required|min:5|max:255|unique:users',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:13'
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);
        
        User::create($validatedData);
    
        Alert::success('Success', 'Anda telah berhasil mendaftar!');
        return redirect('/login'); 
    }

}
