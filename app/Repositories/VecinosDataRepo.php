<?php

namespace App\Repositories;


use App\Models\VecinosData;
use App\Repositories\Base\BaseRepo;


class VecinosDataRepo extends BaseRepo {

	public function getModel() 
	{
		return new VecinosData();
	}
}