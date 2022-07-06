<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Restoran extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $table='restorans';
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
