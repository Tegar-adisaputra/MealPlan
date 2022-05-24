<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HalamanRestoController extends Controller
{
    public function index()
    {
        $data = Restoran::all();
        return view('/halamanresto',  [
            'title' => 'Resto',
            'active' => 'halamanresto',
            'data'=>$data
        ]);
    }
}
