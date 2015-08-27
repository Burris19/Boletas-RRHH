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
			'puesto_desempeñado',
			'fortalezas_laborales',
			'areas_de_mejora',
			'le_aparecen_llamadas_de_atencion',
			'fechas_en_las_que_laboro',
			'motivo_del_retiro',
			'quien_cofirma',
			'mencione_como_fue_su_desempeno',
			'fortaleza_laboral2',
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
