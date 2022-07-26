<?php

namespace App\Http\Controllers\Admin_Resto;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\booking;

class BookingController extends Controller
{
    public function show($id)
    {
        $pengaturan = \App\Models\Restoran::find($id);

        $pengaturan_maksimal_booking = $pengaturan->maksimal_booking;
        $booking = booking::where('id_resto',$id)->where('status','Pending')->get();
        
        return view('/admin_resto/booking',[
            "title" => "Booking",
            "pengaturan_maksimal_booking" => $pengaturan_maksimal_booking,
            'booking'=>$booking,
        ]);
    }

    public function setuju($id)
    {
        \App\Models\booking::where('id_booking', $id)->update([
            'status' => 'Setuju'
        ]);
    
        return redirect()->route('admin_resto.booking', ["restoran" => $id])->with(['updateStatusSukses' => 'Berhasil Disetujui']);
    }



    public function tolak($id)
    {
        \App\Models\booking::where('id_booking', $id)->update([
            'status' => 'Tolak'
        ]);
    
        return redirect()->route('admin_resto.booking', ["restoran" => $id])->with(['updateStatusSukses' => 'Berhasil Ditolak']);


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
