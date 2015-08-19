<?php
/**
 * Created by PhpStorm.
 * User: julian
 * Date: 19/08/15
 * Time: 09:04 AM
 */

namespace App\Repositories;
use App\Models\FileData;
use App\Repositories\Base\BaseRepo;

class FilesDataRepo extends BaseRepo {

    public function getModel()
    {
        return new FileData;
    }
}
