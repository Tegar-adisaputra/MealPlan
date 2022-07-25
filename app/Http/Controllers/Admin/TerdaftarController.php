<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin\terdaftar;
use Illuminate\Http\Request;

class TerdaftarController extends Controller
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

    public function halaman_restoran()
    {
        $data = Home::all();
        return view('/admin/halamanrestoranadmin',[
            'title' => 'Home',
            'active' => 'halamanutama',
            'data'=>$data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\terdaftar  $terdaftar
     * @return \Illuminate\Http\Response
     */
    public function show(terdaftar $terdaftar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\terdaftar  $terdaftar
     * @return \Illuminate\Http\Response
     */
    public function edit(terdaftar $terdaftar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\terdaftar  $terdaftar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, terdaftar $terdaftar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\terdaftar  $terdaftar
     * @return \Illuminate\Http\Response
     */
    public function destroy(terdaftar $terdaftar)
    {
        //
    }
}
