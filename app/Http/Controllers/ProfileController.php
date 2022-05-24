<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $user = User::where('id', Auth::user()->id)->first();

        return view('/profile', compact('user'), [
                'title' => 'Profile',
                'active' => 'profile'
        ]);
    }

    public function update(Request $request)
    {
        $this->validate($request, [
            'nohp' => 'numeric|min:10',
            'password' => 'confirmed'
        ]);

        $user = User::where('id', Auth::user()->id)->first();
        $user->username = $request->username;
        $user->nohp = $request->nohp;
        $user->email = $request->email;

        if(!empty($request->password))
        {
            $user->password = Hash::make($request->password);
        }

        $user->update();

        /* return back()->with('updateSuccess', 'Profil berhasil di update!'); */
        Alert::success('Success', 'Profil berhasil di update!');
        return redirect('/profile'); 
    }
}

