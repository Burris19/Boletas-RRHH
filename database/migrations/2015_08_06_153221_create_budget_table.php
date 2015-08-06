<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBudgetTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('budgetData',function(Blueprint $table){
			$table->increments('id');
			$table->integer('ingresos');
			$table->integer('egresos');
			$table->integer('diferencia');
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
		Schema::drop('budgetData');
	}

}
