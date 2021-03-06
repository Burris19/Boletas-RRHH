<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecordsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('records', function(Blueprint $table){
				$table->increments('id');
				$table->string('puesto');
				$table->string('empresa');
				$table->string('nombre');
				$table->string('observacion');
				$table->string('url');
				$table->string('estado');

        $table->integer('id_user')->unsigned();
        $table->foreign('id_user')->references('id')->on('users');
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
		Schema::drop('records');
	}

}
