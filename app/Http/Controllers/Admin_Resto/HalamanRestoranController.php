<?php

namespace App\Http\Controllers\Admin_Resto;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Log;

use RealRashid\SweetAlert\Facades\Alert;

use App\Models\Restoran;

use Illuminate\Support\Facades\Hash;

class HalamanRestoranController extends Controller
{
    public function show(Restoran $restoran)
    {
        return view('/admin_resto/halamanresto',[
            "title"=>"Restoran A",
            "active" => "halamanresto",
            "restoran"=>$restoran
        ]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            "nama_resto" => "required",
            "no_telp" => "required",
            "alamat_resto" => "required",
            "map_resto" => "required",
            "deskripsi_resto" => "required",
        ]);

        $inputfile = $_FILES['gambar'];

        if($inputfile['error'] > 0 && $inputfile['error'] !== UPLOAD_ERR_NO_FILE){
            Alert::error('Error', $this->codeToMessage($inputfile['error']));
            return redirect()->route('admin_resto.showresto', ['restoran' => $id]); 
        }

        move_uploaded_file($inputfile['tmp_name'], base_path('public') . '/uploader/'.$inputfile['name']);

        $restoran = Restoran::find($id);

        Restoran::where("id", $id)->update([
            "nama_resto" => $request->input("nama_resto"),
            "no_telp" => $request->input("no_telp"),
            "alamat_resto" => $request->input("alamat_resto"),
            "map_resto" => $request->input("map_resto"),
            "deskripsi_resto" => $request->input('deskripsi_resto'),
            "gambar" => $inputfile['name'] ? $inputfile['name'] : $restoran->gambar
        ]);

        return redirect()->route("admin_resto.showresto", ["restoran" => $id])->with(["updateRestoSukses" => "Update Berhasil"]);
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
}

