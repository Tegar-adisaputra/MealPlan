<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Restoran;

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
    public function show(Restoran $restoran)
    {
        return view('/halamanresto',[
            "title"=>"Restoran",
            "active" => "halamanresto",
            "restoran"=>$restoran
        ]);
    }

}
