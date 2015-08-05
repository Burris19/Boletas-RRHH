<?php

namespace App\Repositories;

use App\Models\FamilyData;
use App\Repositories\Base\BaseRepo;

class FamilyDataRepo extends BaseRepo {

	public function getModel()
	{
		return new FamilyData();
	}
}