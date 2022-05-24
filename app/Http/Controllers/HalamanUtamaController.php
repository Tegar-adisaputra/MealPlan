<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Halamanutama;


class HalamanUtamaController extends Controller
{
    public function index()
    {
        $data = Halamanutama::all();
        return view('/halamanutama',  [
            'title' => 'Home',
            'active' => 'halamanutama',
            'data'=>$data
        ]);
    }

}
