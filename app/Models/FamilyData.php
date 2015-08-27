<?php

namespace App\Models;

class FamilyData extends BaseModel {
		protected $table = 'familyData';
		protected $fillable = [
				'nombre',
				'edad',
				'originario',
				'ingresos',
				'profecion',
				'telefono',
				'direccion',
				'relacion',
				'observacion',
				'hijos',
				'tipo',
				'id_record',
				'familiares_presos',
				'descripcion_familiares_presos'
			];

		public $relations = ['record'];

		public function record()
		{
			return $this->hasOne('App\Models\Record','id','id_record');
		}
}
