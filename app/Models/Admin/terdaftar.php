<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class terdaftar extends Model
{
    use HasFactory;
    protected $table='terdaftar';
    protected $fillable = [
        'care',
        'name',
        'username',
        'deskripsi',
        'no_telp',
        'gambar',
        'email',
        'nama_pemilik',
        'nohp_pemilik',
        'alamat',
        'map_resto',
        'provinsi',
        'kotakabupaten',
        'kapasitas',
        'password',
    ];

    protected $hidden = ['password'];
}
