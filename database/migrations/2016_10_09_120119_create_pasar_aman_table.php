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
        Schema::create('pasar', function (Blueprint $table) {
            // $table->increments('id');
            // $table->unsignedInteger('user_id');
            // $table->string('balai_pom')->nullable();
            // $table->string('nama_pasar');
            // $table->string('kepala_pasar')->nullable();
            // $table->string('petugas_pasar')->nullable();
            // $table->string('sumber_data_intervensi')->nullable();
            // $table->string('tahun_mulai_intervensi')->nullable();
            // $table->string('tahun_survey')->nullable();
            // $table->string('contact_person')->nullable();
            // $table->string('los_kios')->nullable();
            // $table->float('presentase_jawaban')->nullable();
            // $table->string('hasil_survey')->nullable();
            // $table->text('alamat_pasar')->nullable();
            // $table->unsignedInteger('provinsi_id')->nullable();
            // $table->unsignedInteger('kota_id')->nullable();
            // $table->unsignedInteger('kecamatan_id')->nullable();
            // $table->string('photo')->nullable();
            // $table->timestamps();

            // $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            // $table->foreign('provinsi_id')->references('id')->on('provinsi')->onDelete('cascade');
            // $table->foreign('kota_id')->references('id')->on('kota')->onDelete('cascade');
            // $table->foreign('kecamatan_id')->references('id')->on('kecamatan')->onDelete('cascade');
            
            $table->string('kode_pasar', 10)->primary();
            $table->string('nama_pasar')->nullable();
            $table->text('alamat_pasar')->nullable();
            $table->string('nama_kab')->nullable();
            $table->string('nama_prop')->nullable();
            $table->string('nama_kapasar')->nullable();
            $table->string('photo')->nullable();
            $table->string('kategori')->nullable();
            $table->float('presentase')->nullable();
            $table->enum('aman', ['aman', 'tidak aman'])->nullable();
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
        Schema::dropIfExists('pasar');
    }
}
