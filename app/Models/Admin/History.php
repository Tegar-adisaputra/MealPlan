<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class History extends Model
{
    /* protected $table='bookings';
    protected $fillable = [
        'care',
        'id_user',
        'nama_pemesan',
        'jam_masuk',
        'jam_keluar',
        'tanggal',
        'catatan',
        'id_resto',
        'nama_resto',
        'kode',
    ]; */
    
    public function allData()
    {
        return DB::table('bookings')
            //->leftJoin('users', 'users.id', '=', 'bookings.id_user')
            ->get();
    }
}
