<?php

namespace App\Models;

class Record extends BaseModel {

	protected $table = 'records';
	protected $fillable = [
		'url',
		'id_user',
		'puesto',
		'empresa',
		'nombre',
		'observacion',
		'estado'
	];

	public $relations =['user'];

    public function user()
    {
        return $this->hasOne('App\Models\User','id','id_user');
    }
}
