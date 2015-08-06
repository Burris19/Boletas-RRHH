<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSaludDataTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('saludData',function(Blueprint $table){
			$table->increments('id');
			$table->string('sa1');
			$table->string('sa2');
			$table->string('sa3');
			$table->string('sa4');
			$table->string('sa5');
			$table->string('sa6');
			$table->string('sa7');
			$table->string('sa8');
			$table->string('sa9');
			$table->string('sa10');
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
		Schema::drop('saludData');
	}

}
