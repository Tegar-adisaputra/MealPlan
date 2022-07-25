<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id('id_booking');
            $table->string('id_user')->nullable();
            $table->string('id_resto')->nullable();
            $table->string('nama_pemesan');
            $table->string('nama_resto')->nullable();
            $table->string('jumlah_kursi');   
            $table->string('jam_masuk');
            $table->string('jam_keluar');
            $table->string('tanggal');
            $table->string('kode')->nullable();
            $table->text('catatan')->nullable();
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
        Schema::dropIfExists('bookings');
    }
}
