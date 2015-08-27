<?php

namespace App\Models;

class LaborData extends BaseModel {

	protected $table = 'laborData';
	protected $fillable = [
			'empresa',
			'direccion',
			'telefono',
			'puesto',
			'jefe_inmediato',
			'puesto_jefe_inmediato',
			'fecha_inicio',
			'fecha_retiro',
			'ultimo_salario',
			'motivo_despido',


			'departamento_que_confirma',
			'nombre_puesto',
			'fechas_en_las_que_laboro',
			'puesto_que_desempeño',
			'tiene_llamadas_de_atencion',
			'motivo_del_retiro',
			'jefe_inmediato2',
			'nombre_y_puesto',
			'desenpeño',
			'fortaleza_laborales',
			'area_de_mejora2',
			'como_fueron_sus_relaciones_interpersonales',
			'motivo_de_retiro2',
			
			'id_record'
		];


	public function record()
	{
		return $this->hasOne('App\Models\Record','id','id_record');
	}
}
