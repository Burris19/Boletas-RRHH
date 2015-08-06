<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHomeDataTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('homeData',function(Blueprint $table){
			$table->increments('id');
			$table->string('hd1');
			$table->string('hd2');
			$table->string('hd3');
			$table->string('hd4');
			$table->string('hd5');
			$table->string('hd6');
			$table->string('hd7');
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
		Schema::drop('homeData');
	}

}
