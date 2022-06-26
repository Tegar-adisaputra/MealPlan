<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Home;

class HomeController extends Controller
{/* 
    protected $guard='adminMiddle'; */

    public function index()
    {
        $data = Home::all();
        return view('/admin/home',  [
            'title' => 'Home',
            'active' => 'halamanutama',
            'data'=>$data
        ]);
    }

}
