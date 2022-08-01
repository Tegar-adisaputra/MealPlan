<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class booking extends Model
{
    protected $table='bookings';
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
    ];

}
