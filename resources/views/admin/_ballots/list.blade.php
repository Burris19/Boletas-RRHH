@extends('admin.list.list')

@section('list-title')
    Registros
@stop

@section('buttons')
    <a href="#" id = "btn-open-wizard" class="btn btn-next btn-fill btn-info btn-wd btn-sm" >Nuevo Registro</a>
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
            <td>{{ $value->nombre }}</td>
            <td>{{ $value->empresa }}</td>
            <td>{{ $value->puesto }}</td>
            <td>{{ $value->user->name }}</td>
            <td class="text-center">
                <a href="#" data-id="{{ $value->id }}" data-toggle="tooltip" class="btn btn-effect-ripple btn-xs btn-success edit"><i class="fa fa-pencil"></i></a>
                <a href="{{ action('Admin\BallotsController@getPDF', $value->id) }}" target="_blank" data-toggle="tooltip"  class="btn btn-effect-ripple btn-xs btn-success download"><i class="fa fa-download"></i></a>
                <a href="{{ action('Admin\BallotsController@getInfor', $value->id) }}" target="_blank" data-toggle="tooltip"  class="btn btn-effect-ripple btn-xs btn-danger download"><i class="fa fa-download"></i></a>
                <a href="#" data-id="{{ $value->id }}" data-toggle="tooltip" title="Eliminar" class="btn btn-effect-ripple btn-xs btn-danger delete"><i class="fa fa-times"></i></a>
            </td>
         </tr>
    @endforeach
@stop
<div id="div-modal"></div>
<script>
    $(function(){
        CRUD.url_base = 'ballots';
    })
</script>
{!! Html::script('app/helpers/crud_operate.js') !!}
{!! Html::script('app/admin/generate.js') !!}
@stop
