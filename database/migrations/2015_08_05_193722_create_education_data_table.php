<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEducationDataTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('educationData',function(Blueprint $table){
			$table->string('establecimiento');
			$table->string('direccion');
			$table->string('fecha');
			$table->string('titulo');
			$table->string('observacion');
			$table->string('tipo');
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
		Schema::drop('educationData');
	}

}
