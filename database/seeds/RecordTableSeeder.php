<?php

use Illuminate\Database\Seeder;

class RecordTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('records')->insert(array(
            'dp_name' => 'Julian Hernandez',
            'id_user' => '1'            
		));
	}

}
