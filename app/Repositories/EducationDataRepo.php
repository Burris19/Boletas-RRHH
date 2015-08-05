<?php


namespace App\Repositories;

use App\Models\EducationData;
use App\Repositories\Base\BaseRepo;


class EducationDataRepo extends BaseRepo {

	public function getModel()
	{
		return new EducationData();
	}

}
