<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonalDataTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('personalData',function(Blueprint $table){
			$table->increments('id');
			$table->string('dp1');
			$table->string('dp2');
			$table->string('dp3');
			$table->string('dp4');
			$table->string('dp5');
			$table->string('dp6');
			$table->string('dp7');
			$table->string('dp8');
			$table->string('dp9');
			$table->string('dp10');
			$table->string('dp11');
			$table->string('dp12');
			$table->string('dp13');
			$table->string('dp14');
			$table->string('dp15');
			$table->string('dp16');
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
		Schema::drop('personalData');
	}

}

