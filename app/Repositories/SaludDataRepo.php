<?php


namespace App\Repositories;


use App\Models\SaludData;
use App\Repositories\Base\BaseRepo;

class SaludDataRepo extends BaseRepo {

	public function getModel()
	{
		return new SaludData();
	}
}