<?php

namespace App\Http\Controllers;

use App\Models\booking;
use App\Models\Restoran;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/booking',[
            'title' => 'Booking',
            'active' => 'booking'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $bookings = new Booking;
        $bookings->nama_pemesan = $request->input('nama_pemesan');
        $bookings->jumlah_kursi = $request->input('jumlah_kursi');
        $bookings->tanggal = $request->input('tanggal');
        $bookings->jam_masuk = $request->input('masuk');
        $bookings->jam_keluar = $request->input('keluar');
        $bookings->catatan = $request->input('catatan');
        $bookings->kode = $request->input('kode');
        $bookings->id_resto = $request->input('id_resto');
        $bookings->nama_resto = $request->input('nama_resto');
        $bookings->save();
        return redirect()->route('booking'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function show(Restoran $restoran)
    {
        $pengaturan_maksimal_booking = $restoran->maksimal_booking;

        $tanggal_maksimal_booking = date('Y-m-d', strtotime("+ {$pengaturan_maksimal_booking} days"));

        $resto['nama_resto'] = 'test';

        return view('/booking', [
            'title' => 'Booking',
            'active' => 'booking',
            'restoran' => $restoran,
            'tanggal_maksimal_booking' => $tanggal_maksimal_booking,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function edit(booking $booking)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, booking $booking)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function destroy(booking $booking)
    {
        //
    }
}
