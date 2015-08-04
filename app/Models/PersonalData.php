<?php

namespace App\Models;

class PersonalData extends BaseModel {
	protected $table = 'personalData';
	protected $fillable = ['dp1','dp2','dp3','dp4','dp5','dp6','dp7','dp8','dp9','dp10','dp11','dp12','dp13','dp14','dp15','dp16','id_record'];

	public $relations = ['record'];

	public function record()
	{
		return $this->hasOne('App\Models\Record','id','id_record');
	}
}