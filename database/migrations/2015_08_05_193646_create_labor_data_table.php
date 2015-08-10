<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLaborDataTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('laborData',function(Blueprint $table){
			$table->increments('id');
			$table->string('empresa');
			$table->string('direccion');
			$table->string('telefono');
			$table->string('puesto');
			$table->string('jefe_inmediato');
			$table->string('puesto_jefe_inmediato');
			$table->string('fecha_inicio');
			$table->string('fecha_retiro');
			$table->string('ultimo_salario');
			$table->string('motivo_despido');
			$table->string('referencia_obtenida');
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
		Schema::drop('laborData');
	}

}
