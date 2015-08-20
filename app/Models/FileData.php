<?php
/**
 * Created by PhpStorm.
 * User: julian
 * Date: 19/08/15
 * Time: 09:01 AM
 */
namespace App\Models;

class FileData extends BaseModel {

	protected $table = 'files';    
    protected $fillable = ['url','id_record'];

    public $relations = ['record'];

    public function record()
    {
        return $this->hasOne('App\Models\Record','id','id_record');
    }

}