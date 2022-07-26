<?php

namespace App\Http\Controllers\Admin_Resto;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\booking;

class HistoryController extends Controller
{
    public function show($id)
    {
        $pengaturan = \App\Models\Restoran::find($id);

        $pengaturan_maksimal_booking = $pengaturan->maksimal_booking;
        $booking = booking::where('id_resto',$id)->whereIn('status',['Setuju','Tolak'])->get();
        
        return view('/admin_resto/history',[
            "title" => "History",
            'booking'=>$booking,
        ]);
    }


    
}
