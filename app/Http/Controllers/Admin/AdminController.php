<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Home;
use App\Models\Admin\terdaftar;
use App\Models\Admin\History;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
        $data = Home::all();
        return view('/admin/home',  [
            'title' => 'Home',
            'active' => 'halamanutama',
            'data'=>$data
        ]);
    }

    function check(Request $request)
    {
        //Validate Inputs
        $request->validate([
           'username'=>'required',
           'password'=>'required'
        ]);

        $creds = $request->only('username','password');

        if( Auth::guard('admin')->attempt($creds) ){
            return redirect()->route('admin.home');
        }else{
            return redirect()->route('admin.home')->with('fail','Login tidak berhasil!');
        }
   }

   function logout()
   {
        Auth::guard('admin')->logout();
        return redirect()->route('admin.login');
    }

    public function halaman_restoran()
    {
        $data = Home::all();
        return view('/admin/halamanrestoranadmin',[
            'title' => 'Home',
            'active' => 'halamanutama',
            'data'=>$data
        ]);
    }
    public function history(){
        $data = History::all();
        return view('/admin/history',[
            'title' => 'History',
            'active' => 'history',
            'data'=> $data
        ]);
    }
    
    public function stored(Request $request){
        // $request->validate([
        //     'nama_resto' => 'required|min:5|max:255',
        //     'alamat_resto' => 'required',
        //     'deskripsi_resto' => 'required',
        //     'no_telp' => 'required|min:5|numeric',
        //     'username' => 'required|min:5|max:20|unique:restorans',
        //     'map_resto' => 'required',
        //     'email' => 'required|email:dns|unique:restorans',
        //     'nama_pemilik' => 'required',
        //     'nohp_pemilik' => 'required|min:5|numeric',
        //     'provinsi' => 'required',
        //     'kabupatenkota' => 'required',
        //     'kapasitas' => 'required|numeric',
        //     'gambar' => 'nullable',
        // ]);
        
        // $error = '';
        // $inputfile = $_FILES['gambar'];

        // if($inputfile['error'] > 0 && $inputfile['error'] !== UPLOAD_ERR_NO_FILE){
        //     Alert::error('Error', $this->codeToMessage($inputfile['error']));
        //     // return redirect()->route('admin_resto.register'); 
        // }

        // move_uploaded_file($inputfile['tmp_name'], base_path('public') . '/uploader/'.$inputfile['name']);

        
        $terdaftar = new terdaftar;
        $terdaftar->nama_resto = $request->input('nama_resto');
        $terdaftar->username = $request->input('username');
        $terdaftar->deskripsi_resto = $request->input('deskripsi_resto');
        $terdaftar->no_telp= $request->input('no_telp');
        // $terdaftar->gambar = $inputfile['name'];
        $terdaftar->email = $request->input('email');
        $terdaftar->nama_pemilik = $request->input('nama_pemilik');
        $terdaftar->nohp_pemilik = $request->input('nohp_pemilik');
        $terdaftar->alamat_resto = $request->input('alamat_resto');
        $terdaftar->map_resto = $request->input('map_resto');
        $terdaftar->provinsi = $request->input('provinsi');
        $terdaftar->kabupatenkota = $request->input('kabupatenkota');
        $terdaftar->kapasitas = $request->input('kapasitas');
        $terdaftar->password = $request->input('password');
        $terdaftar->maksimal_booking = $request->input('maksimal_booking');
        $terdaftar->save();
    }
}
