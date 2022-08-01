<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\Admin\History;
use App\Models\User;

class HistoryController extends Controller
{
    public function __construct()
    {
        $this->History = new History();
    }

    public function index()
    {
        /* $user = \App\Models\User::find($id);
        $history = History::where('id_user',$id)->get(); */
        $data = [
            'history' => $this->History->allData(),
        ];

        return view('/history', $data, [
            'title' => 'History',
            'active' => 'history'
        ]);
    }

    /* public function show($id)
    {
        $user = \App\Models\User::find($id);

        //$pengaturan_maksimal_booking = $pengaturan->maksimal_booking;
        $history = \App\Models\Admin\History::where('id_user', $id)->get();
        
        return view('/history', [
            'title' => 'History',
            'active' => 'history',
            'history' => $history
        ]);
    } */
    
    /* public function history(){
        $data = History::all();
        return view('/history',[
            'title' => 'History',
            'active' => 'history',
            'data'=> $data
        ]);
    } */
}
