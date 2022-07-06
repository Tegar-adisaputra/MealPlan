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
        /* $request->validate([
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
            'password' => 'required|min:5|numeric'
        ]); */
        // return response()->json($_FILES['gambar'], 200);

        $error = '';

        $inputfile = $_FILES['gambar'];

        if($inputfile['error'] > 0 && $inputfile['error'] !== UPLOAD_ERR_NO_FILE){
            Alert::error('Error', $this->codeToMessage($inputfile['error']));
            return redirect()->route('admin_resto.register'); 
        }

        move_uploaded_file($inputfile['tmp_name'], base_path('public') . '/uploader/'.$inputfile['name']);
        
        $restorans = new Restoran;
        $restorans->nama_resto = $request->input('name');
        $restorans->username = $request->input('username');
        $restorans->deskripsi_resto= $request->input('deskripsi');
        $restorans->no_telp= $request->input('no_telp');
        $restorans->gambar = $inputfile['name'];
        $restorans->email = $request->input('email');
        $restorans->nama_pemilik = $request->input('nama_pemilik');
        $restorans->nohp_pemilik = $request->input('nohp_pemilik');
        $restorans->alamat_resto = $request->input('alamat');
        $restorans->map_resto = $request->input('map_resto');
        $restorans->provinsi = $request->input('provinsi');
        $restorans->kabupatenkota = $request->input('kotakabupaten');
        $restorans->kapasitas = $request->input('kapasitas');
        $restorans->password = Hash::make($request->input('password'));
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
    /* function create(Request $request){
        //Validate inputs
        $request->validate([
            'username' => 'required|min:5|max:255|unique:admin_restos',
            'nama_resto' => 'required',
            'nama_pemilik' => 'required',
            'noHP_pemilik' => 'required|min:5|numeric',
            'alamat_resto' => 'required',
            'noTelp_resto' => 'required|min:5|numeric',
            'email' => 'required|email:dns|unique:admin_restos',
            'map_resto' => 'required',
            'deskripsi_resto' => 'required',
            'gambar' => 'required',
            'password' => 'required|min:5|max:12'
        ]);

        $admin_resto = new admin_resto();
        $admin_resto->username = $request->username;
        $admin_resto->nama_resto = $request->nama_resto;
        $admin_resto->nama_pemilik = $request->nama_pemilik;
        $admin_resto->noHP_pemilik = $request->noHP_pemilik;
        $admin_resto->alamat_resto = $request->alamat_resto;
        $admin_resto->noTelp_resto = $request->noTelp_resto;
        $admin_resto->email = $request->email;
        $admin_resto->map_resto = $request->map_resto;
        $admin_resto->deskripsi_resto = $request->deskripsi_resto;
        $admin_resto->gambar = $request->gambar;
        $admin_resto->password = Hash::make($request->password);
        $save = $admin_resto->save(); */

        /* if( $save ){
            return redirect()->back()->with('success','Anda telah berhasil mendaftar sebagai mitra');
        }else{
            return redirect()->back()->with('fail','Maaf, Anda gagal mendaftar sebagai mitra');
        }
    } */

    //function check(Request $request){
      //  Validate Inputs
        //$request->validate([
          //  'username'=>'required',
           /* 'username'=>'required|exists:admin_restos,username', */
           //'password'=>'required'
        //]/* ,[
            //'username.exists'=>'Username tidak terdaftar.'
      // ] */);

        /* $creds = $request->only('username','password');

        if(Auth::guard('admin_resto')->attempt($creds, $request->remember)) {
            $request->session()->regenerate();
            return redirect()->route('admin_resto.home');
        }
        
        return back()->with('fail', 'Login tidak berhasil!');
        if( Auth::guard('admin_resto')->attempt($creds) ){
            return redirect()->route('admin_resto.home');
        }else{
            return redirect()->route('admin_resto.login')->with('fail','Login tidak berhasil!');
        }
    }

    function logout(){
        Auth::guard('admin_resto')->logout();
        return redirect('/');
    } */
}
