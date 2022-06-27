<!-- <?php 

/* namespace App\Http\Controllers\Admin_Resto;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\admin_resto;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class AdminRestoController extends Controller
{
    function create(Request $request){
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

       /*  if( $save ){
            return redirect()->back()->with('success','Anda telah berhasil mendaftar sebagai mitra');
        }else{
            return redirect()->back()->with('fail','Maaf, Anda gagal mendaftar sebagai mitra');
        } */
    //}

   // function check(Request $request){
        //Validate Inputs
       // $request->validate([
       //    'username'=>'required',
           /* 'username'=>'required|exists:admin_restos,username', */
       //    'password'=>'required'
       // ]/* ,[
            //'username.exists'=>'Username tidak terdaftar.'
      //  ] */);

        //$creds = $request->only('username','password');

        /* if(Auth::guard('admin_resto')->attempt($creds, $request->remember)) {
            $request->session()->regenerate();
            return redirect()->route('admin_resto.home');
        }
        
        return back()->with('fail', 'Login tidak berhasil!'); */
    /*     if( Auth::guard('admin_resto')->attempt($creds) ){
            return redirect()->route('admin_resto.home');
        }else{
            return redirect()->route('admin_resto.login')->with('fail','Login tidak berhasil!');
        }
    } */

    /* function logout(){
        Auth::guard('admin_resto')->logout();
        return redirect('/');
    } */
//}
