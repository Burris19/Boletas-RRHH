<?php
/**
 * Created by PhpStorm.
 * User: julian
 * Date: 19/08/15
 * Time: 09:01 AM
 */
namespace App\Models;

class fileData extends BaseModel {

    protected $table = 'files';
    protected $fillable = ['description','url','id_record'];

    public $relations = ['record'];

    public function record()
    {
        return $this->hasOne('App\Models\Record','id','id_record');
    }

}