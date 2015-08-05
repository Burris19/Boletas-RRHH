<?php

namespace App\Models;

class LaborData extends BaseModel {

	protected $table = 'laborData';
	protected $fillable = ['empresa','direccion','telefono','puesto','jefe_inmediato','puesto_jefe_inmediato','fecha_inicio','fecha_retiro','ultimo_salario','motivo_despido','referencia_obtenida','id_record'];


	public function record()
	{
		return $this->hasOne('App\Models\Record','id','id_record');
	}
}
