<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;

class AdminController extends Controller
{
    public function index()
    {
        $data = Admin::all();
        return view('/admin/home',  [
            'title' => 'Home',
            'active' => 'halamanutama',
            'data'=>$data
        ]);
    }

    public function destroy(Admin $id){
        Admin::destroy($resto->id);
        return redirect('/admin/home')->with('success','Data berhasil dihapus');
    }
}
