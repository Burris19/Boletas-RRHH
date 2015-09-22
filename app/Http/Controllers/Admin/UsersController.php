<?php
/**
 * Created by PhpStorm.
 * User: YOEL
 * Date: 18/03/15
 * Time: 10:53
 */

namespace App\Http\Controllers\Admin;

use App\Repositories\UserRepo;
use App\Helpers\FormX;

class UsersController extends CrudController {

    protected $rules = array(
        'username' => 'required',
        'password' => 'required'
    );

    protected $module = '_users';

    function __construct(UserRepo $userRepo)
    {
        parent::__construct('admin');
        $this->repo = $userRepo;
    }

    public function updateRules($data = null)
    {
        $this->rules = array(
            'username' => 'required'
        );
    }

    public function showDelete($id)
    {
        $data = $this->repo->findOrFail($id);
        return view($this->root . '/' . $this->module . '/delete',compact('data'));
    }

    public function fields($data = null)
    {
        $type = array(
            'administrator' => 'Administrador',
            'user' => 'Usuario Normal'
        );

        if($data)
        {
            return FormX::make()
                ->input('username','Usuario:','',$data->username)
                ->input('name','Nombre Completo:','',$data->name)
                ->input('job','Puesto Laboral:','',$data->job)
                ->select('type','Tipo:',$type,$data->type)
                ->input('password','Contraseña:','');

        }
        else
        {
            return FormX::make()
                ->input('username','Usuario:','Usuario')
                ->input('password','Contraseña:','Contraseña','','password')
                ->input('name','Nombre Completo','Nombre completo')
                ->input('job','Puesto Laboral','Puesto laboral')
                ->select('type','Tipo:',$type);
        }
    }

}
