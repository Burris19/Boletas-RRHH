<?php

namespace App\Repositories;

use App\Models\PersonalData;
use App\Repositories\Base\BaseRepo;

class PersonalDataRepo extends BaseRepo {
	public function getModel()
	{
		return new PersonalData();
	}

}