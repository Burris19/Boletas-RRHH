<?php 

namespace App\Repositories;

use App\Models\LaborData;
use App\Repositories\Base\BaseRepo;

class LaborDataRepo extends BaseRepo {

	public function getModel()
	{
		return new LaborData;
	}
} 