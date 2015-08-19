<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFilesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('files',function(Blueprint $table){
			$table->increments('id');
			$table->string('description');
			$table->string('url');
			$table->integer('id_record')->unsigned();
			$table->foreign('id_record')->references('id')->on('records');
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
		Schema::drop('files');
	}

}
