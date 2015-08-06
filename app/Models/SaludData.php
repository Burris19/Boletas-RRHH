<?php

namespace App\Models;

class SaludData extends BaseModel {

	protected $table = 'saludData';
	protected $fillable = ['sa1','sa2','sa3','sa4','sa5','sa6','sa7','sa8','sa9','sa10','id_record'];

	public $relations = ['record'];

	public function record()
	{
		return $this->hasOne('App\Models\Record','id','id_record');
	}

}
