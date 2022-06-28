<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Models\Restoran;
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
    public function create(){
        return view('/resto/register',[
            'title' => 'Register',
            'active' => 'register'
        ]);
    }
//untuk register restoran
    public function stored(Request $request)
    {
        $restorans = new Restoran;
        $restorans->nama_resto = $request->input('name');
        $restorans->alamat_resto = $request->input('alamat');
        $restorans->deskripsi_resto= $request->input('deskripsi');
        $restorans->no_telp= $request->input('no_telp');
        $restorans->username = $request->input('username');
        $restorans->map_resto = $request->input('map_resto');
        $restorans->email = $request->input('email');
        $restorans->nama_pemilik = $request->input('nama_pemilik');
        $restorans->nohp_pemilik = $request->input('nohp_pemilik');
        $restorans->provinsi = $request->input('provinsi');
        $restorans->kabupatenkota = $request->input('kotakabupaten');
        $restorans->kapasitas = $request->input('kapasitas');
        $restorans->gambar = $request->input('gambar');
        $restorans->password = $request->input('password');
        $restorans->save();
        return redirect()->back()->with('status','Added Successfully');
    }
}
