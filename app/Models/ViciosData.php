<?php

namespace App\Models;

class ViciosData extends BaseModel {

	protected $table = 'viciosData';
	protected $fillable = ['vi1','vi2','vi3','vi4','vi5','vi6','vi7','vi8','vi9','vi10','id_record'];

	public $relations = ['record'];

	public function record()
	{
		return $this->hasOne('App\Models\Record','id','id_record');
	}

}
