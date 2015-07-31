@extends('admin.list.list')

@section('list-title')
    Registros
@stop

@section('buttons')
    <a href="#" id = "btn-open-wizard" class="btn btn-effect-ripple btn-important" >Nuevo Registro</a>
@stop

@section('list-content')
    @parent

@section('list-content-columns')
    <th class="text-center" style="width: 50px;">#</th>
    <th>Fecha</th>
    <th>Persona</th>
    <th>Empresa</th>
    <th>Puesto</th>
    <th>Usuario</th>    
    <th class="text-center" style="width: 75px;"><i class="fa fa-flash"></i></th>
@stop

@section('list-content-values')
    @foreach($data as $key => $value)
        <tr>
            <td class="text-center">{{ $key + 1 }}</td>
            <td>{{ date('d/m/Y',strtotime($value->created_at)) }}</td>
            <td>{{ $value->dp_name }}</td>
            <td>{{ $value->dp_name }}</td>
            <td>{{ $value->dp_name }}</td>
            <td>{{ $value->user->username }}</td>
            <td class="text-center">
                <a href="{{ $value->id }}" data-toggle="tooltip" title="Descargar Imagen Boleta" class="btn btn-effect-ripple btn-xs btn-success download"><i class="fa fa-download"></i></a>
                <a href="{{ $value->id }}" data-toggle="tooltip" title="Descargar Imagen Boleta" class="btn btn-effect-ripple btn-xs btn-success download"><i class="fa fa-download"></i></a>
                <a href="{{ $value->id }}" data-toggle="tooltip" title="Descargar Imagen Boleta" class="btn btn-effect-ripple btn-xs btn-success download"><i class="fa fa-download"></i></a>
            </td>
         </tr>
    @endforeach
@stop

{!! Html::script('app/helpers/crud_operate.js') !!}
{!! Html::script('app/admin/generate.js') !!}
@stop