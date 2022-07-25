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
        $data = [
            'history' => $this->History->allData(),
        ];

        return view('/history', $data, [
            'title' => 'History',
            'active' => 'history'
        ]);
    }

    /* public function history(){
        $data = History::all();
        return view('/history',[
            'title' => 'History',
            'active' => 'history',
            'data'=> $data
        ]);
    } */
}
