<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateThreadImagesTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('thread_images', function (Blueprint $table) {
			$table->increments('id');
			$table->unsignedInteger('forum_user_id');
			$table->string('located');
			$table->timestamps();

			$table->foreign('forum_user_id')->references('id')->on('forum_users')->onDelete('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('thread_images');
	}
}
