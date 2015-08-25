@extends('admin.list.list')

@section('list-title')
    Usuarios
@stop

@section('button-create-text')
    Nuevo Usuario
@stop

@section('list-content')
    @parent

@section('list-content-columns')
    <th class="text-center" style="width: 50px;">#</th>
    <th>Usuario</th>
    <th>Tipo</th>
    <th class="text-center" style="width: 75px;"><i class="fa fa-flash"></i></th>
@stop

@section('list-content-values')
    @foreach($data as $key => $value)
        <tr>
            <td class="text-center">{{ $key + 1 }}</td>
            <td>{{ $value->username }}</td>
            <td>{{ $value->type }}</td>
            <td class="text-center">
                <a href="#" data-id="{{ $value->id }}" data-toggle="tooltip" title="Editar" class="btn btn-effect-ripple btn-xs btn-success edit"><i class="fa fa-pencil"></i></a>
                <a href="#" data-id="{{ $value->id }}" data-toggle="tooltip" title="Eliminar" class="btn btn-effect-ripple btn-xs btn-danger delete"><i class="fa fa-times"></i></a>
            </td>
        </tr>
    @endforeach
@stop

@include('admin._users.create',compact('fields'))

<div id="div-modal"></div>
<script>
    $(function(){
        CRUD.url_base = 'users';
        Helper.rules = {
            'username':{ required : true },
            'password'  : { required  : true },
            'name'    :{ required : true } ,
            'job'     :{ required : true },
        };
        Helper.messages = {
            'username':{ required : 'Debe ingresar un usuario' },
            'password' : { required : 'Debe ingresar una contraseña' },
            'name' : { required : 'Debe ingresar un nombre' },
            'job' : { required : 'Debe ingresar el cargo' }
        }
        Helper.validate('#form-create');
    })
</script>
{!! Html::script('app/helpers/crud_operate.js') !!}
@stop
