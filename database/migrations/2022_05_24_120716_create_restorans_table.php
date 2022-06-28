<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRestoransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('restorans', function (Blueprint $table) {
            $table->id();
            $table->string('nama_resto');  
            $table->string('username')->unique();  
            $table->text('deskripsi_resto');
            $table->string('no_telp');
            $table->string('gambar')->nullable();
            /* $table->text('menu'); */
            $table->text('email')->unique();
            $table->text('nama_pemilik');
            $table->string('nohp_pemilik');
            $table->text('alamat_resto');
            $table->text('map_resto');
            $table->text('provinsi');
            $table->text('kabupatenkota');
            $table->string('kapasitas');
            $table->string('password');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('restorans');
    }
}
