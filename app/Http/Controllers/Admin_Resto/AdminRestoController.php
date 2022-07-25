<?php

namespace App\Http\Controllers\Admin_Resto;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Restoran;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class AdminRestoController extends Controller
{
    // BAGIAN REGISTRASI ADMIN RESTORAN
    public function create(){
        return view('/admin_resto/register',[
            'title' => 'Register',
            'active' => 'register'
        ]);
    }

    public function stored(Request $request)
    {
        $request->validate([
            'nama_resto' => 'required|min:5|max:255',
            'alamat_resto' => 'required',
            'deskripsi_resto' => 'required',
            'no_telp' => 'required|min:5|numeric',
            'username' => 'required|min:5|max:20|unique:restorans',
            'map_resto' => 'required',
            'email' => 'required|email:dns|unique:restorans',
            'nama_pemilik' => 'required',
            'nohp_pemilik' => 'required|min:5|numeric',
            'provinsi' => 'required',
            'kabupatenkota' => 'required',
            'kapasitas' => 'required|numeric',
            'gambar' => 'nullable',
            'password' => 'required|min:5',
            'maksimal_booking' => 'required|min:30|numeric'
        ]);
        
        $error = '';

        $inputfile = $_FILES['gambar'];

        if($inputfile['error'] > 0 && $inputfile['error'] !== UPLOAD_ERR_NO_FILE){
            Alert::error('Error', $this->codeToMessage($inputfile['error']));
            return redirect()->route('admin_resto.register'); 
        }

        move_uploaded_file($inputfile['tmp_name'], base_path('public') . '/uploader/'.$inputfile['name']);
        
        $restorans = new Restoran;
        $restorans->nama_resto = $request->input('nama_resto');
        $restorans->username = $request->input('username');
        $restorans->deskripsi_resto = $request->input('deskripsi_resto');
        $restorans->no_telp= $request->input('no_telp');
        $restorans->gambar = $inputfile['name'];
        $restorans->email = $request->input('email');
        $restorans->nama_pemilik = $request->input('nama_pemilik');
        $restorans->nohp_pemilik = $request->input('nohp_pemilik');
        $restorans->alamat_resto = $request->input('alamat_resto');
        $restorans->map_resto = $request->input('map_resto');
        $restorans->provinsi = $request->input('provinsi');
        $restorans->kabupatenkota = $request->input('kabupatenkota');
        $restorans->kapasitas = $request->input('kapasitas');
        $restorans->password = Hash::make($request->input('password'));
        $restorans->maksimal_booking = $request->input('maksimal_booking');
        $restorans->save();

        Alert::success('Success', 'Anda telah berhasil mendaftar sebagai admin restoran.');
        return redirect()->route('admin_resto.login'); 
        /* return redirect()->back()->with('status','Added Successfully'); */
    }

    private function codeToMessage($code) 
    { 
        switch ($code) { 
            case UPLOAD_ERR_INI_SIZE: 
                $message = "The uploaded file exceeds the upload max file size"; // The uploaded file exceeds the upload_max_filesize directive in php.ini
                break; 
            case UPLOAD_ERR_FORM_SIZE: 
                $message = "The uploaded file exceeds the upload max file size";  // The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form
                break; 
            case UPLOAD_ERR_PARTIAL: 
                $message = "The uploaded file was only partially uploaded"; 
                break; 
            case UPLOAD_ERR_NO_FILE: 
                $message = "No file was uploaded"; 
                break; 
            case UPLOAD_ERR_NO_TMP_DIR: 
                $message = "Missing a temporary folder"; 
                break; 
            case UPLOAD_ERR_CANT_WRITE: 
                $message = "Failed to write file to disk"; 
                break; 
            case UPLOAD_ERR_EXTENSION: 
                $message = "File upload stopped by extension"; 
                break; 

            default: 
                $message = "Unknown upload error"; 
                break; 
        } 
        return $message; 
    } 


    // BAGIAN LOGIN ADMIN RESTO

    public function index()
    {
        return view('/admin_resto/login', [
            'title' => 'Login',
            'active' => 'login'
        ]);
    }

    // login admin resto
    public function check(Request $request)
    {
        //Validate Inputs
        $request->validate([
           'username'=>'required',
           'password'=>'required'
        ]);

        $creds = $request->only('username','password');

        
        if( Auth::guard('admin_resto')->attempt($creds) ){
            $restoran = Restoran::where('username', $request->input('username'))->first();

            setcookie('restoranid', $restoran->id, time() + 3600 * 24 * 60, '/', '');

            return redirect()->route('admin_resto.home');
        }else{
            return redirect()->route('admin_resto.login')->with('fail','Login tidak berhasil!');
        }
   }

   public function logout()
    {
        Auth::guard('admin_resto')->logout();
        return redirect()->route('admin_resto.login');
    }
}
