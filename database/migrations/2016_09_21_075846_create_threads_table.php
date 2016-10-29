<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateThreadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('threads', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('forum_user_id');
            $table->string('judulThread');
            $table->enum('tipe', ['guide', 'umum']);
            $table->text('konten');
            $table->timestamps();

            $table->foreign('forum_user_id')->references('id')->on('pengguna-forum')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('threads');
    }
}
