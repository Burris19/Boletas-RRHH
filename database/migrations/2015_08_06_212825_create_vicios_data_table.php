<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateViciosDataTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('viciosData',function(Blueprint $table){

				$table->increments('id');
				$table->string('vi1');
				$table->string('vi2');
				$table->string('vi3');
				$table->string('vi4');
				$table->string('vi5');
				$table->string('vi6');
				$table->string('vi7');
				$table->string('vi8');
				$table->string('vi9');
				$table->string('vi10');
				$table->string('vi11');
				$table->string('vi12');

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
		Schema::drop('viciosData');
	}

}
