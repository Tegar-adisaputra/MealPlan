<?php

namespace App\Http\Controllers\Admin_Resto;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\admin_resto;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('/resto/register', [
            'title' => 'Register',
            'active' => 'register'
        ]);
    }

    /* public function store(Request $request)
    {
        $validatedData = $request->validate([
            'username' => 'required|min:5|max:255|unique:admin_restos',
            'nama_resto' => 'required|max:255',
            'nama_pemilik' => 'min:5|max:255',
            'noHP_pemilik' => 'min:5|max:13|numeric',
            'alamat_resto' => 'min:5|max:255',
            'noTelp_resto' => 'min:5|max:13|numeric',
            'email' => 'email:dns|unique:admin_restos',
            'map_resto' => 'min:5|max:255',
            'deskripsi_resto' => 'min:5|max:255',
            'gambar' => 'jpg|jpeg|png',
            'password' => 'min:5|max:255'
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);
        
        admin_resto::create($validatedData);

        return redirect('/resto/login');
    } */
}
