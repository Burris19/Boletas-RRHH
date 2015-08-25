<?php

use Illuminate\Database\Seeder;

class AdminTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('users')->insert(array(
            'username' => 'admin',
			'name' => 'Ingrid Jeanette Consenza Vargas',
			'job' => 'Encargada de Reclutamiento',
            'password' => \Hash::make('recruitment2015'),
            'type' => 'administrator'
		));
	}

}
