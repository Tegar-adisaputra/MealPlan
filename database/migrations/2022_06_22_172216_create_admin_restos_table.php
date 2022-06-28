<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminRestosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin_restos', function (Blueprint $table) {
            $table->id();
            $table->string('username')->unique();
            $table->string('nama_resto');
            $table->string('nama_pemilik');   
            $table->string('noHP_pemilik');
            $table->text('alamat_resto');
            $table->string('noTelp_resto');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->text('map_resto');
            $table->text('deskripsi_resto');
            $table->text('gambar');
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('admin_restos');
    }
}
