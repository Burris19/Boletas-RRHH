<?php


namespace App\Repositories;


use App\Models\ViciosData;
use App\Repositories\Base\BaseRepo;

class viciosDataRepo extends BaseRepo {

	public function getModel()
	{
		return new ViciosData();
	}
}