<?php

namespace App\Models;

class VecinosData extends BaseModel {

	protected $table = "vecinosData";
	protected $fillable = ['v1','v2','v3','v4','v5','v6','v7','v8','v9','id_record'];

	public $relations = ['record'];

	public function record()
	{
		return $this->hasOne('App\Models\Record','id','id_record');
	}
}