<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVecinosDataTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('vecinosData',function(Blueprint $table){
			$table->increments('id');
			$table->string('v1');
			$table->string('v2');
			$table->string('v3');
			$table->string('v4');
			$table->string('v5');
			$table->string('v6');
			$table->string('v7');
			$table->string('v8');
			$table->string('v9');
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
		Schema::drop('vecinosData');
	}

}
