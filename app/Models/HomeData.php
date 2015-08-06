<?php

namespace App\Models;


class HomeData extends BaseModel {

	protected $table = 'homeData';

	protected $fillable = ['hd1','hd2','hd3','hd4','hd5','hd6','hd7','id_record'];

	public $relations = ['record'];

	public function record()
	{
		return $this->hasOne('App\Models\Record','id','id_record');
	}

}