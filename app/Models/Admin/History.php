<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class History extends Model
{
    /* protected $table='bookings'; */
    
    public function allData()
    {
        return DB::table('bookings')
            //->leftJoin('users', 'users.id', '=', 'bookings.id_user')
            ->get();
    }
}
