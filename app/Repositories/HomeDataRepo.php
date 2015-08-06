<?php 


namespace App\Repositories;

use App\Models\HomeData;
use App\Repositories\Base\BaseRepo;

class HomeDataRepo extends BaseRepo {

	public function getmodel()
	{
		return new HomeData();
	}

}