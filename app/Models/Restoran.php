<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restoran extends Model
{
    protected $table='restorans';
    protected $fillable = [
        'care',
        'name',
        'alamat',
        'no_telp',
        'deskripsi',
        'map_resto',
        'gambar',
        'username',
        'nama_pemilik',
        'email',
        'nohp_pemilik',
        'provinsi',
        'kotakabupaten',
        'kapasitas',
        'password',
    ];

}
