<?php

namespace App\Models;


class EducationData extends BaseModel {

	protected $table = "educationData";
	protected $fillable = ['establecimiento','direccion','fecha','titulo','tipo','observacion','id_record'];

	public $relations = ['record'];

	public function record()
	{
		return $this->hasOne('App\Models\Record','id','id_record');
	}

}

