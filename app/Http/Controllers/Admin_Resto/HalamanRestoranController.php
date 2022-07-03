<?php

namespace App\Http\Controllers\Admin_Resto;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Restoran;

use Illuminate\Support\Facades\Hash;

class HalamanRestoranController extends Controller
{
    public function show(Restoran $restoran)
    {
        $data = Restoran::find(1);
        return view('/admin_resto/halamanresto',[
            "title"=>"Restoran A",
            "active" => "halamanresto",
            "restoran"=>$data
        ]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            "nama_resto" => "required",
            "no_telp" => "required",
            "alamat_resto" => "required",
            "map_resto" => "required"
        ]);

        Restoran::where("id", $id)->update([
            "nama_resto" => $request->input("nama_resto"),
            "no_telp" => $request->input("no_telp"),
            "alamat_resto" => $request->input("alamat_resto"),
            "map_resto" => $request->input("map_resto"),
        ]);

        return redirect()->route("detailrestoran", ["restoran" => $id])->with(["updateRestoSukses" => "Update Berhasil"]);
    }
}
