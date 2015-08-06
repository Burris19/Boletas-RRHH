<?php

namespace App\Models;

class BudgetData extends BaseModel {

	protected $table = 'budgetData';

	protected $fillable = ['ingresos','egresos','diferencia','id_record'];

	public $relations = ['record'];

	public function record()
	{
		return $this->hasOne('App\Models\Record','id','id_record');
	}



}


