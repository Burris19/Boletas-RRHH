<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFamilyDataTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('familyData',function(Blueprint $table){
				$table->increments('id');
				$table->string('nombre');
				$table->string('edad');
				$table->string('originario');
				$table->string('ingresos');
				$table->string('profecion');
				$table->string('telefono');
				$table->string('direccion');
				$table->string('relacion');
				$table->string('observacion');
				$table->string('hijos');
				$table->string('tipo');
				$table->string('familiares_presos');
				$table->string('descripcion_familiares_presos');

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
		Schema::drop('familyData');
	}

}
