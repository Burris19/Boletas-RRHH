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

				$table->string('departamento_que_confirma');
				$table->string('nombre_puesto');
				$table->string('fechas_en_las_que_laboro');
				$table->string('puesto_que_desempeño');
				$table->string('tiene_llamadas_de_atencion');
				$table->string('motivo_del_retiro');
				$table->string('jefe_inmediato2');
				$table->string('nombre_y_puesto');
				$table->string('desenpeño');
				$table->string('fortaleza_laborales');
				$table->string('area_de_mejora2');
				$table->string('como_fueron_sus_relaciones_interpersonales');
				$table->string('motivo_de_retiro2');

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
