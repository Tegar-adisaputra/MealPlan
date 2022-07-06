<?php

namespace App\Http\Controllers\Admin_Resto;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Restoran;

use Illuminate\Support\Facades\Hash;

class ProfileRestoController extends Controller
{
    public function show(Restoran $restoran)
    {
        return view('/admin_resto/profile',[
            "title"=>"Profile A",
            "active" => "profile",
            "restoran"=>$restoran
        ]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            "nama_pemilik" => "required",
            "no_telp" => "required",
            "email" => "required",
            "kapasitas" => "required",
        ]);

        Restoran::where("id", $id)->update([
            "nama_pemilik" => $request->input("nama_pemilik"),
            "no_telp" => $request->input("no_telp"),
            "email" => $request->input("email"),
            "kapasitas" => $request->input("kapasitas")
        ]);

        return redirect()->route("admin_resto.showprofile", ["restoran" => $id])->with(["updateProfileSukses" => "Update Berhasil"]);
    }
}
