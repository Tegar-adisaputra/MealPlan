<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        return view('/profile',  [
            'title' => 'Profile',
            'active' => 'profile',
            'Name' => 'Mochamad Ridwan Tri NurDadi',
            'Gender' => 'Laki-Laki',
            'Contact' => '087783270137',
            'Email' => 'mrdwntrind999@gmail.com',
            'Image' => 'profileuser1.jpg'
        ]);
    }
}

