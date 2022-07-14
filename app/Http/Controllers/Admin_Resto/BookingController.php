<?php

namespace App\Http\Controllers\Admin_Resto;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function show($id)
    {
        $pengaturan = \App\Models\Restoran::find($id);

        $pengaturan_maksimal_booking = $pengaturan->maksimal_booking;

        return view('/admin_resto/booking',[
            "title" => "Booking",
            "pengaturan_maksimal_booking" => $pengaturan_maksimal_booking,
        ]);
    }

    public function update(Request $request, $id)
    {
        $maksimal_booking = $request->input('pengaturan_tanggal_booking');

        \App\Models\Restoran::where('id', $id)->update([
            'maksimal_booking' => $maksimal_booking
        ]);
    
        return redirect()->route('admin_resto.booking', ["restoran" => $id])->with(['updateTanggalSukses' => 'Update Berhasil']);
    }
}
