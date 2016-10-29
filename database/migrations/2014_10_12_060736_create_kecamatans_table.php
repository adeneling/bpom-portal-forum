<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKecamatansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kecamatan', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('provinsi_id');
            $table->unsignedInteger('kota_id');
            $table->string('tipe');
            $table->string('kecamatan');
            $table->timestamps();

            $table->foreign('provinsi_id')->references('id')->on('provinsi')->onDelete('cascade');
            $table->foreign('kota_id')->references('id')->on('kota')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kecamatan');
    }
}
