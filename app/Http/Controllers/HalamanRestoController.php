<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HalamanRestoController extends Controller
{
    public function index()
    {
        return view('/halamanresto',  [
            'title' => 'Resto',
            'active' => 'halamanresto'
        ]);
    }
}
