<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePasarAmanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pasar_aman', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->string('nama_pasar');
            $table->string('kepala_pasar')->nullable();
            $table->string('petugas_pasar')->nullable();
            $table->text('alamat_pasar')->nullable();
            $table->unsignedInteger('provinsi_id');
            $table->unsignedInteger('kota_id');
            $table->unsignedInteger('kecamatan_id')->nullable();
            $table->string('photo')->nullable();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('provinsi_id')->references('id')->on('provinsi')->onDelete('cascade');
            $table->foreign('kota_id')->references('id')->on('kota')->onDelete('cascade');
            $table->foreign('kecamatan_id')->references('id')->on('kecamatan')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pasar_aman');
    }
}
