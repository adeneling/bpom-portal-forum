<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeTableBeritaDropMediaColumn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('beritas', function(Blueprint $table){
            $table->dropColumn(['media_foto', 'media_video', 'media_dokumen']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::table('beritas', function(Blueprint $table){
            $table->text('media_foto');
            $table->text('media_video');
            $table->text('media_dokumen');
        });
    }
}
