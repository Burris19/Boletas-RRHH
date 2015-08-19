<?php

namespace App\Repositories;

use App\Models\BudgetData;
use App\Repositories\Base\BaseRepo;

class BudgetDataRepo extends BaseRepo {

	public function getModel()
	{
		return new BudgetData();
	}
}