@extends('admin.list.list')

@section('list-title')
    Edicion de registro
@stop

@section('buttons')
    <a href="#" id="btn-cancelar" class="btn btn-next btn-fill btn-danger btn-wd btn-sm" >Cancelar</a>
@stop

@section('list-content')
    @parent

    <div class="wizard-container">
        <form action="ballots" method="POST" id = "form-edit" name = "form-wizar">
            <input type="hidden" name="_method" value="PUT">
            <div class="card wizard-card ct-wizard-azzure" id="wizard">
                <ul>
                    <li><a href="#about" data-toggle="tab">Personal</a></li>
                    <li><a href="#account" data-toggle="tab">Familiar</a></li>
                    <li><a href="#address" data-toggle="tab">Educativo</a></li>
                    <li><a href="#laboral" data-toggle="tab">Laboral</a></li>
                    <li><a href="#presupuesto" data-toggle="tab">Presupuesto</a></li>
                    <li><a href="#residencia" data-toggle="tab">Residencia</a></li>
                    <li><a href="#salud" data-toggle="tab">Salud</a></li>
                    <li><a href="#vecinos" data-toggle="tab">Vecinos</a></li>

                </ul>

                <div class="tab-content">
                    <!-- Datos Personales-->
                    <div class="tab-pane" id="about">
                        <div class="row">
                            <div class="col-sm-10 col-sm-offset-1">

                                <div class="row">
                                    <!-- Nombres -->
                                    <div class="form-group col-xs-6">
                                        <label>¿Puesto al que aplica?</label>
                                        <input type="hidden" id = "numeroId" value="{{ $db->id }}">
                                        <input type="text" class="form-control" name="puesto_empresa" placeholder="Puesto al que aplica" value="{{ $db->puesto }}">
                                    </div>
                                    <!-- pellidos -->
                                    <div class="form-group col-xs-6">
                                        <label>¿Empresa cliente?</label>
                                        <input type="text" class="form-control" name="nombre_empresa" placeholder="Nombre de la empresa" value="{{ $db->empresa }}">
                                    </div>
                                </div>

                                <div class="row">
                                    <!-- Nombres -->
                                    <div class="form-group col-xs-6">
                                        <label>¿Cual es su nombre?</label>
                                        <input type="text" class="form-control" id="dp1" name="dp1" placeholder="Nombres" value="{{ $dp[0]->dp1 }}">
                                    </div>
                                    <!-- pellidos -->
                                    <div class="form-group col-xs-6">
                                        <label>¿Cuales son sus apellido?</label>
                                        <input type="text" class="form-control" id="dp2" name="dp2" placeholder="Apellidos" value="{{ $dp[0]->dp2 }}">
                                    </div>
                                </div>
                                <div class="row">
                                    <!--Telefono casa -->
                                    <div class="form-group col-xs-6">
                                        <label>¿Cual es el numero del telefono de su casa?</label>
                                        <input type = "number" class = "form-control" id = "dp3" name = "dp3" placeholder = "Teléfono de Casa" value="{{ $dp[0]->dp3 }}">
                                    </div>
                                    <!-- Celular -->
                                    <div class="form-group col-xs-6">
                                        <label>¿Cual es su numero de Celular?</label>
                                        <input type = "number" class = "form-control" id = "dp4" name = "dp4" placeholder = "Teléfono Celular" value="{{ $dp[0]->dp4 }}">
                                    </div>
                                </div>
                                <div class="row">
                                    <!--Profesion -->
                                    <div class="form-group col-xs-6">
                                        <label>¿Cual es su edad?</label>
                                        <input type = "number" class = "form-control" id = "dp5" name = "dp5" placeholder = "Edad" value="{{ $dp[0]->dp5 }}">
                                    </div>
                                    <!--Profesion -->
                                    <div class="form-group col-xs-6">
                                        <label>¿Cual es su profesion?</label>
                                        <input type = "text" class = "form-control" id = "dp6" name = "dp6" placeholder = "Profesion" value="{{ $dp[0]->dp6 }}">
                                    </div>
                                </div>
                                <div class="row">
                                    <!--Estado Civil -->
                                    <div class="form-group col-xs-6">
                                        <label>Elija su estado Civil</label>
                                        {!! Form::select( 'dp7', ['Casado' => 'Casado', 'Soltero' => 'Soltero', 'Divorciado' => 'Divorciado' , 'Viudo' => 'Viudo'] , $dp[0]->dp7 , ['class' => 'form-control'] ) !!}
                                    </div>
                                    <!-- DPI -->
                                    <div class="form-group col-xs-6">
                                        <label>¿Cual es su numero de DPI?</label>
                                        <input type = "number" class = "form-control" id = "dp8" name = "dp8" placeholder = "DPI" value="{{ $dp[0]->dp8 }}">
                                    </div>
                                </div>
                                <div class="row">
                                    <!--Profesion -->

                                    <div class="form-group col-xs-6">
                                        <label>¿Cual es su numero de NIT?</label>
                                        <input type = "text" class = "form-control" id = "dp9" name = "dp9" placeholder = "NIT" value="{{ $dp[0]->dp9 }}">
                                    </div>


                                    <!--Profesion -->
                                    <div class="form-group col-xs-6">
                                        <label>¿Posee licencia de conducir?</label>
                                        {!! Form::select( 'dp10', ['Si' => 'Si', 'No' => 'No'] , $dp[0]->dp10 , ['class' => 'form-control'] ) !!}
                                    </div>
                                </div>

                                <div class="row">
                                    <!--Profesion -->
                                    <div class="form-group col-xs-6">
                                        <label>¿Que tipo de licencia posee?</label>
                                        {!! Form::select( 'dp11', ['Tipo A' => 'Tipo A', 'Tipo B' => 'Tipo B', 'Tipo C' => 'Tipo C' , 'Tipo M' => 'Tipo M', 'Tipo M' => 'Tipo M'] , $dp[0]->dp11 , ['class' => 'form-control'] ) !!}
                                    </div>
                                    <!--Profesion -->
                                    <div class="form-group col-xs-6">
                                        <label>¿Cual es su Numero de licencia?</label>
                                        <input type = "number" class="form-control" placeholder = "Numero de licencia" id = "dp12" name = "dp12" value="{{ $dp[0]->dp12 }}">
                                    </div>
                                </div>
                                <div class="row">
                                    <!--Profesion -->
                                    <div class="form-group col-xs-6">
                                        <label>¿Cual es su religion?</label>
                                        <input type = "text" class = "form-control" id = "dp13" name = "dp13" placeholder = "Religion" value="{{ $dp[0]->dp13 }}">
                                    </div>
                                    <!--Profesion -->
                                    <div class="form-group col-xs-6">
                                        <label>¿Cual es su tipo de sangre?</label>
                                        <input type = "text" class = "form-control" id = "dp14" name = "dp14" placeholder = "Tipo de sangre" value="{{ $dp[0]->dp14 }}">
                                    </div>
                                </div>
                                <div class="row">
                                    <!-- Direccion de la persona -->
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label>¿Cual es la direccion donde vive ?</label>
                                            <input type = "text" class = "form-control" id = "dp15" name = "dp15" placeholder = "Direccion completa" value="{{ $dp[0]->dp15 }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <div class="picture-container">
                                        <div class="picture">
                                            <img src="wizar/imagenes/default-avatar.png" class="picture-src" id="wizardPicturePreview" title=""/>
                                            <input type="file" id="files" name="dp16" />
                                        </div>
                                        <h6>Seleccionar Foto</h6>
                                    </div>
                                </div>
                                <div id="lista">
                                        @if($dp[0]->dp16 === "-----")
                                        @else
                                        <img class="img-thumbnail"  style="width: 25%;" src="{{ $dp[0]->dp16 }}" >
                                        @endif
                                </div>

                            </div>
                        </div>
                    </div>

                    <!-- Datos Familiares y Educativos -->
                    <div class="tab-pane" id="account">
                        <div class="row">
                            <div class="col-sm-10 col-sm-offset-1">
                                <!-- Relacion con su padre -->
                                <p class="bg-primary info-text">Informacion del Padre</p>
                                <div class="row">
                                    <!-- Nombres del padre -->
                                    <div class="form-group col-xs-6">
                                        <label>Nombre del padre</label>
                                        <input type="text" class="form-control" id="df1" name="df1" placeholder="Nombres" value="{{ $dfp[0]->nombre }}" >
                                    </div>
                                    <!-- Edad -->
                                    <div class="form-group col-xs-6">
                                        <label>Edad</label>
                                        <input type="number" class="form-control" id="df2" name="df2" placeholder="Edad" value="{{ $dfp[0]->edad }}">
                                    </div>
                                </div>
                                <div class="row">
                                    <!-- Originario de -->
                                    <div class="form-group col-xs-6">
                                        <label>Originario de</label>
                                        <input type="text" class="form-control" id="df3" name="df3" placeholder="Originario de" value="{{ $dfp[0]->originario }}">
                                    </div>
                                    <!-- Ingresos Aproximados -->
                                    <div class="form-group col-xs-6">
                                        <label>Ingresos aproximados</label>
                                        <input type="number" class="form-control" id="df4" name="df4" placeholder="Ingresos aproximados" value="{{ $dfp[0]->ingresos }}">
                                    </div>
                                </div>
                                <div class="row">
                                    <!-- A que se dedica -->
                                    <div class="form-group col-xs-6">
                                        <label>A que se dedica</label>
                                        <input type="text" class="form-control" id="df5" name="df5" placeholder="A que se dedica" value="{{ $dfp[0]->profecion }}">
                                    </div>
                                    <!-- Numero Telefonico -->
                                    <div class="form-group col-xs-6">
                                        <label>Numero Telefonico</label>
                                        <input type="number" class="form-control" id="df6" name="df6" placeholder="Numero telefonico" value="{{ $dfp[0]->telefono }}">
                                    </div>
                                </div>
                                <div class="row">
                                    <!-- Direccion de la persona -->
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label>Direccion completa</label>
                                            <input type = "text" class = "form-control" id = "df7" name = "df7" placeholder = "Direccion completa" value="{{ $dfp[0]->direccion }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <!--Telefono casa -->
                                    <div class="form-group col-xs-12">
                                    <label>Relacion con su Padre</label>
                                    <textarea  class="form-control" id="df8" name="df8" placeholder="Relación con su padre" rows="3" >{{ $dfp[0]->relacion }}</textarea>
                                </div>
                            </div>
                            <!-- Relacion con su madre -->
                            <p class="bg-primary info-text">Informacion de la Madre</p>
                            <div class="row">
                                <!-- Nombres del padre -->
                                <div class="form-group col-xs-6">
                                    <label>Nombre de la madre</label>
                                    <input type="text" class="form-control" id="df9" name="df9" placeholder="Nombres" value="{{ $dfm[0]->nombre }}">
                                </div>
                                <!-- Edad -->
                                <div class="form-group col-xs-6">
                                    <label>Edad</label>
                                    <input type="number" class="form-control" id="df10" name="df10" placeholder="Edad" value="{{ $dfm[0]->edad }}">
                                </div>
                            </div>
                            <div class="row">
                                <!-- Originario de -->
                                <div class="form-group col-xs-6">
                                    <label>Originario de</label>
                                    <input type="text" class="form-control" id="df11" name="df11" placeholder="Originario de" value="{{ $dfm[0]->originario }}">
                                </div>

                                <!-- Ingresos aproximados -->
                                <div class="form-group col-xs-6">
                                    <label>Ingresos aproximados</label>
                                    <input type="number" class="form-control" id="df12" name="df12" placeholder="Ingresos aproximados" value="{{ $dfm[0]->ingresos }}">
                                </div>
                            </div>
                            <div class="row">
                                <!-- A que se dedica -->
                                <div class="form-group col-xs-6">
                                    <label>A que se dedica</label>
                                    <input type="text" class="form-control" id="df13" name="df13" placeholder="A que se dedica" value="{{ $dfm[0]->profecion }}">
                                </div>
                                <!-- Numero telefonico -->
                                <div class="form-group col-xs-6">
                                    <label>Numero Telefonico</label>
                                    <input type="number" class="form-control" id="df14" name="df14" placeholder="Numero telefonico" value="{{ $dfm[0]->telefono }}">
                                </div>
                            </div>
                            <div class="row">
                                <!-- Direccion de la persona -->
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>Direccion completa</label>
                                        <input type = "text" class = "form-control" id = "df15" name = "df15" placeholder = "Direccion completa" value="{{ $dfm[0]->direccion }}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <!--Telefono casa -->
                                <div class="form-group col-xs-12">
                                <label>Relacion con su madre</label>
                                <textarea  class="form-control" id="df16" name="df16" placeholder="Relación con su madre" rows="3" > {{ $dfm[0]->relacion }}  </textarea>
                            </div>
                        </div>
                        <!-- Relacion con su esposo -->
                        <p class="bg-primary info-text">Informacion del esposo</p>
                        <div class="row">
                            <!-- Nombres del esposo -->
                            <div class="form-group col-xs-6">
                                <label>Nombre del esposo</label>
                                <input type="text" class="form-control" id="df17" name="df17" placeholder="Nombres" value="{{ $dfe[0]->nombre }}" >
                            </div>
                            <!-- Edad -->
                            <div class="form-group col-xs-6">
                                <label>Edad</label>
                                <input type="number" class="form-control" id="df18" name="df18" placeholder="Edad" value="{{ $dfe[0]->edad }}" >
                            </div>
                        </div>
                        <div class="row">
                            <!-- Originario de -->
                            <div class="form-group col-xs-6">
                                <label>Originario de</label>
                                <input type="text" class="form-control" id="df19" name="df19" placeholder="Originario de" value="{{ $dfe[0]->originario }}" >
                            </div>

                            <!-- Ingresos aproximados -->
                            <div class="form-group col-xs-6">
                                <label>Ingresos aproximados</label>
                                <input type="number" class="form-control" id="df20" name="df20" placeholder="Ingresos aproximados" value="{{ $dfe[0]->ingresos }}" >
                            </div>
                        </div>
                        <div class="row">
                            <!-- A que se dedica -->
                            <div class="form-group col-xs-6">
                                <label>A que se dedica</label>
                                <input type="text" class="form-control" id="df21" name="df21" placeholder="A que se dedica"  value="{{ $dfe[0]->profecion }}" >
                            </div>
                            <!-- Numero telefonico -->
                            <div class="form-group col-xs-6">
                                <label>Numero Telefonico</label>
                                <input type="number" class="form-control" id="df22" name="df22" placeholder="Numero telefonico" value="{{ $dfe[0]->telefono }}">
                            </div>
                        </div>
                        <div class="row">
                            <!-- Direccion de la persona -->
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label>Direccion completa</label>
                                    <input type = "text" class = "form-control" id = "df23" name = "df23" placeholder = "Direccion completa" value="{{ $dfe[0]->direccion }}" >
                                </div>
                            </div>
                        </div>

                        <!-- Informacion Hijos -->
                        <p class="bg-primary info-text">Informacion sobre Hijos</p>
                        <div class="row">
                            <!-- Numero de Hijos -->
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label>Numero de hijos</label>
                                    {!! Form::text( 'df79', $dfp[0]->hijos ,  ['class' => 'form-control'] ) !!}
                                </div>
                            </div>
                        </div>

                        <!-- Informacion de los hermanos -->
                        <p class="bg-primary info-text">Informacion sobre Hermanos</p>
                            <!-- Primer Hermano -->
                            <div class="row">
                                <!-- Nombres del esposo -->
                                <div class="form-group col-xs-6">
                                    <label>Nombre completo</label>
                                    {!! Form::text( 'df24', $dfh[0]->nombre ,  ['class' => 'form-control'] ) !!}
                                </div>
                                <!-- Edad -->
                                <div class="form-group col-xs-6">
                                    <label>Edad</label>
                                    {!! Form::number( 'df25', $dfh[0]->edad ,  ['class' => 'form-control'] ) !!}
                                </div>
                            </div>
                            <div class="row">
                                <!-- A que se dedica -->
                                <div class="form-group col-xs-6">
                                    <label>A que se dedica</label>
                                    {!! Form::text( 'df26', $dfh[0]->profecion ,  ['class' => 'form-control'] ) !!}
                                </div>
                                <!-- Numero telefonico -->
                                <div class="form-group col-xs-6">
                                    <label>Numero Telefonico</label>
                                    {!! Form::number( 'df27', $dfh[0]->telefono ,  ['class' => 'form-control'] ) !!}
                                </div>
                            </div>
                            <div class="row">
                                <!-- Observaciones -->
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>Observacion</label>
                                        {!! Form::text( 'df28', $dfh[0]->observacion ,  ['class' => 'form-control'] ) !!}
                                    </div>
                                </div>
                            </div>
                            <!-- Segundo  Hermano -->
                            <hr  class="bro1" @if( $dfh[1]->nombre === '-----' )  style="display: none"  @endif  >
                            <div class="row bro1" @if( $dfh[1]->nombre === '-----' )  style="display: none"  @endif  >
                                <!-- Nombres del esposo -->
                                <div class="form-group col-xs-6">
                                    <label>Nombre completo</label>
                                    {!! Form::text( 'df29', $dfh[1]->nombre ,  ['class' => 'form-control'] ) !!}
                                </div>
                                <!-- Edad -->
                                <div class="form-group col-xs-6">
                                    <label>Edad</label>
                                    {!! Form::number( 'df30', $dfh[1]->edad ,  ['class' => 'form-control'] ) !!}
                                </div>
                            </div>
                            <div class="row bro1" @if( $dfh[1]->nombre === '-----' )  style="display: none"  @endif  >
                                <!-- A que se dedica -->
                                <div class="form-group col-xs-6">
                                    <label>A que se dedica</label>
                                    {!! Form::text( 'df31', $dfh[1]->profecion ,  ['class' => 'form-control'] ) !!}
                                </div>
                                <!-- Numero telefonico -->
                                <div class="form-group col-xs-6">
                                    <label>Numero Telefonico</label>
                                    {!! Form::number( 'df32', $dfh[1]->telefono ,  ['class' => 'form-control'] ) !!}
                                </div>
                            </div>
                            <div class="row bro1" @if( $dfh[1]->nombre === '-----' )  style="display: none"  @endif  >
                                <!-- Observaciones -->
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>Observacion</label>
                                        {!! Form::text( 'df33', $dfh[1]->observacion ,  ['class' => 'form-control'] ) !!}
                                    </div>
                                </div>

                            </div>
                            <!-- Tercer  Hermano -->
                            <hr  class="bro2" @if( $dfh[2]->nombre === '-----' )  style="display: none"  @endif  >
                            <div class="row bro2" @if( $dfh[2]->nombre === '-----' )  style="display: none"  @endif  >
                                <!-- Nombres del esposo -->
                                <div class="form-group col-xs-6">
                                    <label>Nombre completo</label>
                                    {!! Form::text( 'df34', $dfh[2]->nombre ,  ['class' => 'form-control'] ) !!}
                                </div>
                                <!-- Edad -->
                                <div class="form-group col-xs-6">
                                    <label>Edad</label>
                                    {!! Form::number( 'df35', $dfh[2]->edad ,  ['class' => 'form-control'] ) !!}
                                </div>
                            </div>
                            <div class="row bro2" @if( $dfh[2]->nombre === '-----' )  style="display: none"  @endif  >
                                <!-- A que se dedica -->
                                <div class="form-group col-xs-6">
                                    <label>A que se dedica</label>
                                    {!! Form::text( 'df36', $dfh[2]->profecion ,  ['class' => 'form-control'] ) !!}
                                </div>
                                <!-- Numero telefonico -->
                                <div class="form-group col-xs-6">
                                    <label>Numero Telefonico</label>
                                    {!! Form::number( 'df37', $dfh[2]->telefono ,  ['class' => 'form-control'] ) !!}
                                </div>
                            </div>
                            <div class="row bro2" @if( $dfh[2]->nombre === '-----' )  style="display: none"  @endif  >
                                <!-- Observaciones -->
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>Observacion</label>
                                        {!! Form::text( 'df38', $dfh[2]->observacion ,  ['class' => 'form-control'] ) !!}
                                    </div>
                                </div>

                            </div>
                            <!-- Cuarto  Hermano -->
                            <hr  class="bro3" @if( $dfh[3]->nombre === '-----' )  style="display: none"  @endif  >
                            <div class="row bro3" @if( $dfh[3]->nombre === '-----' )  style="display: none"  @endif  >
                                <!-- Nombres del esposo -->
                                <div class="form-group col-xs-6">
                                    <label>Nombre completo</label>
                                    {!! Form::text( 'df39', $dfh[3]->nombre ,  ['class' => 'form-control'] ) !!}
                                </div>
                                <!-- Edad -->
                                <div class="form-group col-xs-6">
                                    <label>Edad</label>
                                    {!! Form::number( 'df40', $dfh[3]->edad ,  ['class' => 'form-control'] ) !!}
                                </div>
                            </div>
                            <div class="row bro3" @if( $dfh[3]->nombre === '-----' )  style="display: none"  @endif  >
                                <!-- A que se dedica -->
                                <div class="form-group col-xs-6">
                                    <label>A que se dedica</label>
                                    {!! Form::text( 'df41', $dfh[3]->profecion ,  ['class' => 'form-control'] ) !!}
                                </div>
                                <!-- Numero telefonico -->
                                <div class="form-group col-xs-6">
                                    <label>Numero Telefonico</label>
                                    {!! Form::number( 'df42', $dfh[3]->telefono ,  ['class' => 'form-control'] ) !!}
                                </div>
                            </div>
                            <div class="row bro3" @if( $dfh[3]->nombre === '-----' )  style="display: none"  @endif  >
                                <!-- Observaciones -->
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>Observacion</label>
                                        {!! Form::text( 'df43', $dfh[3]->observacion ,  ['class' => 'form-control'] ) !!}
                                    </div>
                                </div>

                            </div>
                            <!-- Quinto  Hermano -->
                            <hr  class="bro4" @if( $dfh[4]->nombre === '-----' )  style="display: none"  @endif  >
                            <div class="row bro4" @if( $dfh[4]->nombre === '-----' )  style="display: none"  @endif  >
                                <!-- Nombres del esposo -->
                                <div class="form-group col-xs-6">
                                    <label>Nombre completo</label>
                                    {!! Form::text( 'df44', $dfh[4]->nombre ,  ['class' => 'form-control'] ) !!}
                                </div>
                                <!-- Edad -->
                                <div class="form-group col-xs-6">
                                    <label>Edad</label>
                                    {!! Form::number( 'df45', $dfh[4]->edad ,  ['class' => 'form-control'] ) !!}
                                </div>
                            </div>
                            <div class="row bro4" @if( $dfh[4]->nombre === '-----' )  style="display: none"  @endif  >
                                <!-- A que se dedica -->
                                <div class="form-group col-xs-6">
                                    <label>A que se dedica</label>
                                    {!! Form::text( 'df46', $dfh[4]->profecion ,  ['class' => 'form-control'] ) !!}
                                </div>
                                <!-- Numero telefonico -->
                                <div class="form-group col-xs-6">
                                    <label>Numero Telefonico</label>
                                    {!! Form::number( 'df47', $dfh[4]->telefono ,  ['class' => 'form-control'] ) !!}
                                </div>
                            </div>
                            <div class="row bro4" @if( $dfh[4]->nombre === '-----' )  style="display: none"  @endif  >
                                <!-- Observaciones -->
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>Observacion</label>
                                        {!! Form::text( 'df48', $dfh[4]->observacion ,  ['class' => 'form-control'] ) !!}
                                    </div>
                                </div>

                            </div>
                            <!-- Sexto  Hermano -->
                            <hr  class="bro5" @if( $dfh[5]->nombre === '-----' )  style="display: none"  @endif  >
                            <div class="row bro5" @if( $dfh[5]->nombre === '-----' )  style="display: none"  @endif  >
                                <!-- Nombres del esposo -->
                                <div class="form-group col-xs-6">
                                    <label>Nombre completo</label>
                                    {!! Form::text( 'df49', $dfh[5]->nombre ,  ['class' => 'form-control'] ) !!}
                                </div>
                                <!-- Edad -->
                                <div class="form-group col-xs-6">
                                    <label>Edad</label>
                                    {!! Form::number( 'df50', $dfh[5]->edad ,  ['class' => 'form-control'] ) !!}
                                </div>
                            </div>
                            <div class="row bro5" @if( $dfh[5]->nombre === '-----' )  style="display: none"  @endif  >
                                <!-- A que se dedica -->
                                <div class="form-group col-xs-6">
                                    <label>A que se dedica</label>
                                    {!! Form::text( 'df51', $dfh[5]->profecion ,  ['class' => 'form-control'] ) !!}
                                </div>
                                <!-- Numero telefonico -->
                                <div class="form-group col-xs-6">
                                    <label>Numero Telefonico</label>
                                    {!! Form::number( 'df52', $dfh[5]->telefono ,  ['class' => 'form-control'] ) !!}
                                </div>
                            </div>
                            <div class="row bro5" @if( $dfh[5]->nombre === '-----' )  style="display: none"  @endif  >
                                <!-- Observaciones -->
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>Observacion</label>
                                        {!! Form::text( 'df53', $dfh[5]->observacion ,  ['class' => 'form-control'] ) !!}
                                    </div>
                                </div>

                            </div>
                            <!-- Septimo  Hermano -->
                            <hr  class="bro6" @if( $dfh[6]->nombre === '-----' )  style="display: none"  @endif  >
                            <div class="row bro6" @if( $dfh[6]->nombre === '-----' )  style="display: none"  @endif  >
                                <!-- Nombres del esposo -->
                                <div class="form-group col-xs-6">
                                    <label>Nombre completo</label>
                                    {!! Form::text( 'df54', $dfh[6]->nombre ,  ['class' => 'form-control'] ) !!}
                                </div>
                                <!-- Edad -->
                                <div class="form-group col-xs-6">
                                    <label>Edad</label>
                                    {!! Form::number( 'df55', $dfh[6]->edad ,  ['class' => 'form-control'] ) !!}
                                </div>
                            </div>
                            <div class="row bro6" @if( $dfh[6]->nombre === '-----' )  style="display: none"  @endif  >
                                <!-- A que se dedica -->
                                <div class="form-group col-xs-6">
                                    <label>A que se dedica</label>
                                    {!! Form::text( 'df56', $dfh[6]->profecion ,  ['class' => 'form-control'] ) !!}
                                </div>
                                <!-- Numero telefonico -->
                                <div class="form-group col-xs-6">
                                    <label>Numero Telefonico</label>
                                    {!! Form::number( 'df57', $dfh[6]->telefono ,  ['class' => 'form-control'] ) !!}
                                </div>
                            </div>
                            <div class="row bro6" @if( $dfh[6]->nombre === '-----' )  style="display: none"  @endif  >
                                <!-- Observaciones -->
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>Observacion</label>
                                        {!! Form::text( 'df58', $dfh[6]->observacion ,  ['class' => 'form-control'] ) !!}
                                    </div>
                                </div>

                            </div>
                            <!-- Octavo  Hermano -->
                            <hr  class="bro7" @if( $dfh[7]->nombre === '-----' )  style="display: none"  @endif  >
                            <div class="row bro7" @if( $dfh[7]->nombre === '-----' )  style="display: none"  @endif  >
                                <!-- Nombres del esposo -->
                                <div class="form-group col-xs-6">
                                    <label>Nombre completo</label>
                                    {!! Form::text( 'df59', $dfh[7]->nombre ,  ['class' => 'form-control'] ) !!}
                                </div>
                                <!-- Edad -->
                                <div class="form-group col-xs-6">
                                    <label>Edad</label>
                                    {!! Form::number( 'df60', $dfh[7]->edad ,  ['class' => 'form-control'] ) !!}
                                </div>
                            </div>
                            <div class="row bro7" @if( $dfh[7]->nombre === '-----' )  style="display: none"  @endif  >
                                <!-- A que se dedica -->
                                <div class="form-group col-xs-6">
                                    <label>A que se dedica</label>
                                    {!! Form::text( 'df61', $dfh[7]->profecion ,  ['class' => 'form-control'] ) !!}
                                </div>
                                <!-- Numero telefonico -->
                                <div class="form-group col-xs-6">
                                    <label>Numero Telefonico</label>
                                    {!! Form::number( 'df62', $dfh[7]->telefono ,  ['class' => 'form-control'] ) !!}
                                </div>
                            </div>
                            <div class="row bro7" @if( $dfh[7]->nombre === '-----' )  style="display: none"  @endif  >
                                <!-- Observaciones -->
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>Observacion</label>
                                        {!! Form::text( 'df63', $dfh[7]->observacion ,  ['class' => 'form-control'] ) !!}
                                    </div>
                                </div>

                            </div>
                            <!-- Noveno  Hermano -->
                            <hr  class="bro8" @if( $dfh[8]->nombre === '-----' )  style="display: none"  @endif  >
                            <div class="row bro8" @if( $dfh[8]->nombre === '-----' )  style="display: none"  @endif  >
                                <!-- Nombres del esposo -->
                                <div class="form-group col-xs-6">
                                    <label>Nombre completo</label>
                                    {!! Form::text( 'df64', $dfh[8]->nombre ,  ['class' => 'form-control'] ) !!}
                                </div>
                                <!-- Edad -->
                                <div class="form-group col-xs-6">
                                    <label>Edad</label>
                                    {!! Form::number( 'df65', $dfh[8]->edad ,  ['class' => 'form-control'] ) !!}
                                </div>
                            </div>
                            <div class="row bro8" @if( $dfh[8]->nombre === '-----' )  style="display: none"  @endif  >
                                <!-- A que se dedica -->
                                <div class="form-group col-xs-6">
                                    <label>A que se dedica</label>
                                    {!! Form::text( 'df66', $dfh[8]->profecion ,  ['class' => 'form-control'] ) !!}
                                </div>
                                <!-- Numero telefonico -->
                                <div class="form-group col-xs-6">
                                    <label>Numero Telefonico</label>
                                    {!! Form::number( 'df67', $dfh[8]->telefono ,  ['class' => 'form-control'] ) !!}
                                </div>
                            </div>
                            <div class="row bro8" @if( $dfh[8]->nombre === '-----' )  style="display: none"  @endif  >
                                <!-- Observaciones -->
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>Observacion</label>
                                        {!! Form::text( 'df68', $dfh[8]->observacion ,  ['class' => 'form-control'] ) !!}
                                    </div>
                                </div>

                            </div>
                            <!-- Decimo  Hermano -->
                            <hr  class="bro9" @if( $dfh[9]->nombre === '-----' )  style="display: none"  @endif  >
                            <div class="row bro9" @if( $dfh[9]->nombre === '-----' )  style="display: none"  @endif  >
                                <!-- Nombres del esposo -->
                                <div class="form-group col-xs-6">
                                    <label>Nombre completo</label>
                                    {!! Form::text( 'df69', $dfh[9]->nombre ,  ['class' => 'form-control'] ) !!}
                                </div>
                                <!-- Edad -->
                                <div class="form-group col-xs-6">
                                    <label>Edad</label>
                                    {!! Form::number( 'df70', $dfh[9]->edad ,  ['class' => 'form-control'] ) !!}
                                </div>
                            </div>
                            <div class="row bro9" @if( $dfh[9]->nombre === '-----' )  style="display: none"  @endif  >
                                <!-- A que se dedica -->
                                <div class="form-group col-xs-6">
                                    <label>A que se dedica</label>
                                    {!! Form::text( 'df71', $dfh[9]->profecion ,  ['class' => 'form-control'] ) !!}
                                </div>
                                <!-- Numero telefonico -->
                                <div class="form-group col-xs-6">
                                    <label>Numero Telefonico</label>
                                    {!! Form::number( 'df72', $dfh[9]->telefono ,  ['class' => 'form-control'] ) !!}
                                </div>
                            </div>
                            <div class="row bro9" @if( $dfh[9]->nombre === '-----' )  style="display: none"  @endif  >
                                <!-- Observaciones -->
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>Observacion</label>
                                        {!! Form::text( 'df73', $dfh[9]->observacion ,  ['class' => 'form-control'] ) !!}
                                    </div>
                                </div>

                            </div>

                            <input type='button' class='btn btn-fill btn-danger btn-wd btn-sm' id="addBrother" value='Agregar'>
                            <hr>

                    </div>
                </div>
            </div>

            <!-- Informacion Educativa-->
            <div class="tab-pane" id="address">
                <div class="row">
                    <div class="col-sm-10 col-sm-offset-1">
                        <p class="bg-primary info-text">Educacion Primaria</p>
                        <div class="row">
                            <div class="form-group col-xs-6">
                                <label>Establecimiento</label>
                                <input type="text" class="form-control" id="de1" name="de1" placeholder="Nombre del establecimiento" value="{{ $dep[0]->establecimiento }}">
                            </div>
                            <!-- Edad -->
                            <div class="form-group col-xs-4">
                                <label>Direccion</label>
                                <input type="text" class="form-control" id="de2" name="de2" placeholder="Direccion del establecimiento" value="{{ $dep[0]->direccion }}">
                            </div>
                            <!-- Edad -->
                            <div class="form-group col-xs-2">
                                <label>Fecha</label>
                                <input type="text" class="form-control" id="de3" name="de3" placeholder="Rango fecha" value="{{ $dep[0]->fecha }}">
                            </div>
                        </div>

                        <p class="bg-primary info-text">Educacion Secundaria</p>
                        <div class="row">
                            <div class="form-group col-xs-6">
                                <label>Establecimiento</label>
                                <input type="text" class="form-control" id="de4" name="de4" placeholder="Nombres del establecimiento" value="{{ $des[0]->establecimiento }}" >
                            </div>
                            <!-- Edad -->
                            <div class="form-group col-xs-4">
                                <label>Direccion</label>
                                <input type="text" class="form-control" id="de5" name="de5" placeholder="Direccion del establecimiento" value="{{ $des[0]->direccion }}" >
                            </div>
                            <!-- Edad -->
                            <div class="form-group col-xs-2">
                                <label>Fecha</label>
                                <input type="text" class="form-control" id="de6" name="de6" placeholder="Rango fecha" value="{{ $des[0]->fecha }}" >
                            </div>
                        </div>

                        <p class="bg-primary info-text">Educacion Diversificado</p>
                        <div class="row">
                            <!-- Establecimiento-->
                            <div class="form-group col-xs-8">
                                <label>Establecimiento</label>
                                <input type="text" class="form-control" id="de7" name="de7" placeholder="Nombre del establecimiento" value="{{ $ded[0]->establecimiento }}" >
                            </div>
                            <!-- Edad -->
                            <div class="form-group col-xs-4">
                                <label>Direccion</label>
                                <input type="text" class="form-control" id="de8" name="de8" placeholder="Direccion del establecimiento" value="{{ $ded[0]->direccion }}" >
                            </div>

                            <div class="form-group col-xs-8">
                                <label>Titulo</label>
                                <input type="text" class="form-control" id="de9" name="de9" placeholder="Titulo adquirido" value="{{ $ded[0]->titulo }}" >
                            </div>

                            <!-- Edad -->
                            <div class="form-group col-xs-4">
                                <label>Fecha</label>
                                <input type="text" class="form-control" id="de10" name="de10" placeholder="Rango fecha" value="{{ $ded[0]->fecha }}" >
                            </div>
                        </div>

                        <p class="bg-primary info-text">Educacion Universidad</p>
                        <div class="row">
                            <!-- Establecimiento-->
                            <div class="form-group col-xs-8">
                                <label>Establecimiento</label>
                                <input type="text" class="form-control" id="de11" name="de11" placeholder="Nombre del establecimiento"  value="{{ $deu[0]->establecimiento }}" >
                            </div>
                            <!-- Edad -->
                            <div class="form-group col-xs-4">
                                <label>Direccion</label>
                                <input type="text" class="form-control" id="de12" name="de12" placeholder="Direccion del establecimiento" value="{{ $deu[0]->direccion }}" >
                            </div>

                            <div class="form-group col-xs-8">
                                <label>Titulo</label>
                                <input type="text" class="form-control" id="de13" name="de13" placeholder="Titulo educativo" value="{{ $deu[0]->titulo }}" >
                            </div>

                            <!-- Edad -->
                            <div class="form-group col-xs-4">
                                <label>Fecha</label>
                                <input type="text" class="form-control" id="de14" name="de14" placeholder="Rango fecha" value="{{ $deu[0]->fecha }}" >
                            </div>

                            <!-- Observacion -->
                            <div class="form-group col-xs-12">
                                <label>Observacion</label>
                                <input type="text" class="form-control" id="de15" name="de15" placeholder="Rango fecha" value="{{ $deu[0]->observacion }}" >
                            </div>

                        </div>

                    </div>
                </div>
            </div>

            <!-- Informacion Laboral -->
            <div class="tab-pane" id="laboral">
                <!-- Primera Empresa -->
                <div class="row">
                    <div class="col-sm-10 col-sm-offset-1">
                        <hr>
                        <div class="row">
                            <div class="form-group col-xs-6">
                                <label>Empresa</label>
                                {!! Form::text( 'dl1', $dl[0]->empresa ,  ['class' => 'form-control'] ) !!}
                            </div>
                            <div class="form-group col-xs-6">
                                <label>Direccion</label>
                                {!! Form::text( 'dl2', $dl[0]->direccion ,  ['class' => 'form-control'] ) !!}
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-xs-6">
                                <label>Telefono</label>
                                {!! Form::number( 'dl3', $dl[0]->telefono ,  ['class' => 'form-control'] ) !!}
                            </div>
                            <div class="form-group col-xs-6">
                                <label>Puesto</label>
                                {!! Form::text( 'dl4', $dl[0]->puesto ,  ['class' => 'form-control'] ) !!}
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-xs-6">
                                <label>Jefe Inmediato</label>
                                {!! Form::text( 'dl5', $dl[0]->jefe_inmediato ,  ['class' => 'form-control'] ) !!}
                            </div>
                            <div class="form-group col-xs-6">
                                <label>Puesto del Jefe inmediato</label>
                                {!! Form::text( 'dl6', $dl[0]->puesto_jefe_inmediato ,  ['class' => 'form-control'] ) !!}
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-xs-6">
                                <label>Fecha inicio</label>
                                {!! Form::text( 'dl7', $dl[0]->fecha_inicio ,  ['class' => 'form-control'] ) !!}
                            </div>
                            <div class="form-group col-xs-6">
                                <label>Fecha de Salida</label>
                                {!! Form::text( 'dl8', $dl[0]->fecha_retiro ,  ['class' => 'form-control'] ) !!}
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-xs-6">
                                <label>Ultimo salario</label>
                                {!! Form::number( 'dl9', $dl[0]->ultimo_salario ,  ['class' => 'form-control'] ) !!}
                            </div>
                            <div class="form-group col-xs-6">
                                <label>Motivo de retiro</label>
                                <textarea  class="form-control" name="dl10" placeholder="Motivo de terio" rows="3" required>{{ $dl[0]->motivo_despido }}</textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-xs-12">
                                <label>Referencia objtenida Empresa</label>
                                <textarea  class="form-control" name="dl11" placeholder="Referencia obtenida por parte de la empresa" rows="3" required>{{ $dl[0]->referencia_obtenida }}</textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Segunda Empresa -->
                <div class="row lab1"  @if( $dl[1]->empresa === '-----' )  style="display: none"  @endif >
                    <div class="col-sm-10 col-sm-offset-1">
                        <hr>
                        <div class="row">
                            <div class="form-group col-xs-6">
                                <label>Empresa</label>
                                {!! Form::text( 'dl12', $dl[1]->empresa ,  ['class' => 'form-control'] ) !!}
                            </div>
                            <div class="form-group col-xs-6">
                                <label>Direccion</label>
                                {!! Form::text( 'dl13', $dl[1]->direccion ,  ['class' => 'form-control'] ) !!}
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-xs-6">
                                <label>Telefono</label>
                                {!! Form::number( 'dl14', $dl[1]->telefono ,  ['class' => 'form-control'] ) !!}
                            </div>
                            <div class="form-group col-xs-6">
                                <label>Puesto</label>
                                {!! Form::text( 'dl15', $dl[1]->puesto ,  ['class' => 'form-control'] ) !!}
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-xs-6">
                                <label>Jefe Inmediato</label>
                                {!! Form::text( 'dl16', $dl[1]->jefe_inmediato ,  ['class' => 'form-control'] ) !!}
                            </div>
                            <div class="form-group col-xs-6">
                                <label>Puesto del Jefe inmediato</label>
                                {!! Form::text( 'dl17', $dl[1]->puesto_jefe_inmediato ,  ['class' => 'form-control'] ) !!}
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-xs-6">
                                <label>Fecha inicio</label>
                                {!! Form::text( 'dl18', $dl[1]->fecha_inicio ,  ['class' => 'form-control'] ) !!}
                            </div>
                            <div class="form-group col-xs-6">
                                <label>Fecha de Salida</label>
                                {!! Form::text( 'dl19', $dl[1]->fecha_retiro ,  ['class' => 'form-control'] ) !!}
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-xs-6">
                                <label>Ultimo salario</label>
                                {!! Form::number( 'dl20', $dl[1]->ultimo_salario ,  ['class' => 'form-control'] ) !!}
                            </div>
                            <div class="form-group col-xs-6">
                                <label>Motivo de retiro</label>
                                <textarea  class="form-control" name="dl21" placeholder="Motivo de terio" rows="3" required>{{ $dl[1]->motivo_despido }}</textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-xs-12">
                                <label>Referencia objtenida Empresa</label>
                                <textarea  class="form-control" name="dl22" placeholder="Referencia obtenida por parte de la empresa" rows="3" required>{{ $dl[1]->referencia_obtenida }}</textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Tercera Empresa -->
                <div class="row lab2" @if( $dl[2]->empresa === '-----' )  style="display: none"  @endif >
                    <div class="col-sm-10 col-sm-offset-1">
                        <hr>
                        <div class="row">
                            <div class="form-group col-xs-6">
                                <label>Empresa</label>
                                {!! Form::text( 'dl23', $dl[2]->empresa ,  ['class' => 'form-control'] ) !!}
                            </div>
                            <div class="form-group col-xs-6">
                                <label>Direccion</label>
                                {!! Form::text( 'dl24', $dl[2]->direccion ,  ['class' => 'form-control'] ) !!}
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-xs-6">
                                <label>Telefono</label>
                                {!! Form::number( 'dl25', $dl[2]->telefono ,  ['class' => 'form-control'] ) !!}
                            </div>
                            <div class="form-group col-xs-6">
                                <label>Puesto</label>
                                {!! Form::text( 'dl26', $dl[2]->puesto ,  ['class' => 'form-control'] ) !!}
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-xs-6">
                                <label>Jefe Inmediato</label>
                                {!! Form::text( 'dl27', $dl[2]->jefe_inmediato ,  ['class' => 'form-control'] ) !!}
                            </div>
                            <div class="form-group col-xs-6">
                                <label>Puesto del Jefe inmediato</label>
                                {!! Form::text( 'dl28', $dl[2]->puesto_jefe_inmediato ,  ['class' => 'form-control'] ) !!}
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-xs-6">
                                <label>Fecha inicio</label>
                                {!! Form::text( 'dl29', $dl[2]->fecha_inicio ,  ['class' => 'form-control'] ) !!}
                            </div>
                            <div class="form-group col-xs-6">
                                <label>Fecha de Salida</label>
                                {!! Form::text( 'dl30', $dl[2]->fecha_retiro ,  ['class' => 'form-control'] ) !!}
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-xs-6">
                                <label>Ultimo salario</label>
                                {!! Form::number( 'dl31', $dl[2]->ultimo_salario ,  ['class' => 'form-control'] ) !!}
                            </div>
                            <div class="form-group col-xs-6">
                                <label>Motivo de retiro</label>
                                <textarea  class="form-control" name="dl32" placeholder="Motivo de terio" rows="3" required>{{ $dl[2]->motivo_despido }}</textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-xs-12">
                                <label>Referencia objtenida Empresa</label>
                                <textarea  class="form-control" name="dl33" placeholder="Referencia obtenida por parte de la empresa" rows="3" required>{{ $dl[2]->referencia_obtenida }}</textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Cuarta Empresa  -->
                <div class="row lab3" @if( $dl[3]->empresa === '-----' )  style="display: none"  @endif >
                    <div class="col-sm-10 col-sm-offset-1">
                        <hr>
                        <div class="row">
                            <div class="form-group col-xs-6">
                                <label>Empresa</label>
                                {!! Form::text( 'dl34', $dl[3]->empresa ,  ['class' => 'form-control'] ) !!}
                            </div>
                            <div class="form-group col-xs-6">
                                <label>Direccion</label>
                                {!! Form::text( 'dl35', $dl[3]->direccion ,  ['class' => 'form-control'] ) !!}
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-xs-6">
                                <label>Telefono</label>
                                {!! Form::number( 'dl36', $dl[3]->telefono ,  ['class' => 'form-control'] ) !!}
                            </div>
                            <div class="form-group col-xs-6">
                                <label>Puesto</label>
                                {!! Form::text( 'dl37', $dl[3]->puesto ,  ['class' => 'form-control'] ) !!}
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-xs-6">
                                <label>Jefe Inmediato</label>
                                {!! Form::text( 'dl38', $dl[3]->jefe_inmediato ,  ['class' => 'form-control'] ) !!}
                            </div>
                            <div class="form-group col-xs-6">
                                <label>Puesto del Jefe inmediato</label>
                                {!! Form::text( 'dl39', $dl[3]->puesto_jefe_inmediato ,  ['class' => 'form-control'] ) !!}
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-xs-6">
                                <label>Fecha inicio</label>
                                {!! Form::text( 'dl40', $dl[3]->fecha_inicio ,  ['class' => 'form-control'] ) !!}
                            </div>
                            <div class="form-group col-xs-6">
                                <label>Fecha de Salida</label>
                                {!! Form::text( 'dl41', $dl[3]->fecha_retiro ,  ['class' => 'form-control'] ) !!}
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-xs-6">
                                <label>Ultimo salario</label>
                                {!! Form::number( 'dl42', $dl[3]->ultimo_salario ,  ['class' => 'form-control'] ) !!}
                            </div>
                            <div class="form-group col-xs-6">
                                <label>Motivo de retiro</label>
                                <textarea  class="form-control" name="dl43" placeholder="Motivo de terio" rows="3" required>{{ $dl[3]->motivo_despido }}</textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-xs-12">
                                <label>Referencia objtenida Empresa</label>
                                <textarea  class="form-control" name="dl44" placeholder="Referencia obtenida por parte de la empresa" rows="3" required>{{ $dl[3]->referencia_obtenida }}</textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Quinta Empresa  -->
                <div class="row lab4" @if( $dl[4]->empresa === '-----' )  style="display: none"  @endif>
                    <div class="col-sm-10 col-sm-offset-1">
                        <hr>
                        <div class="row">
                            <div class="form-group col-xs-6">
                                <label>Empresa</label>
                                {!! Form::text( 'dl45', $dl[4]->empresa ,  ['class' => 'form-control'] ) !!}
                            </div>
                            <div class="form-group col-xs-6">
                                <label>Direccion</label>
                                {!! Form::text( 'dl46', $dl[4]->direccion ,  ['class' => 'form-control'] ) !!}
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-xs-6">
                                <label>Telefono</label>
                                {!! Form::number( 'dl47', $dl[4]->telefono ,  ['class' => 'form-control'] ) !!}
                            </div>
                            <div class="form-group col-xs-6">
                                <label>Puesto</label>
                                {!! Form::text( 'dl48', $dl[4]->puesto ,  ['class' => 'form-control'] ) !!}
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-xs-6">
                                <label>Jefe Inmediato</label>
                                {!! Form::text( 'dl49', $dl[4]->jefe_inmediato ,  ['class' => 'form-control'] ) !!}
                            </div>
                            <div class="form-group col-xs-6">
                                <label>Puesto del Jefe inmediato</label>
                                {!! Form::text( 'dl50', $dl[4]->puesto_jefe_inmediato ,  ['class' => 'form-control'] ) !!}
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-xs-6">
                                <label>Fecha inicio</label>
                                {!! Form::text( 'dl51', $dl[4]->fecha_inicio ,  ['class' => 'form-control'] ) !!}
                            </div>
                            <div class="form-group col-xs-6">
                                <label>Fecha de Salida</label>
                                {!! Form::text( 'dl52', $dl[4]->fecha_retiro ,  ['class' => 'form-control'] ) !!}
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-xs-6">
                                <label>Ultimo salario</label>
                                {!! Form::number( 'dl53', $dl[4]->ultimo_salario ,  ['class' => 'form-control'] ) !!}
                            </div>
                            <div class="form-group col-xs-6">
                                <label>Motivo de retiro</label>
                                <textarea  class="form-control" name="dl54" placeholder="Motivo de terio" rows="3" required>{{ $dl[4]->motivo_despido }}</textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-xs-12">
                                <label>Referencia objtenida Empresa</label>
                                <textarea  class="form-control" name="dl55" placeholder="Referencia obtenida por parte de la empresa" rows="3" required>{{ $dl[4]->referencia_obtenida }}</textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Sexta Empresa   -->
                <div class="row lab5" @if( $dl[5]->empresa === '-----' )  style="display: none"  @endif>
                    <div class="col-sm-10 col-sm-offset-1">
                        <hr>
                        <div class="row">
                            <div class="form-group col-xs-6">
                                <label>Empresa</label>
                                {!! Form::text( 'dl56', $dl[5]->empresa ,  ['class' => 'form-control'] ) !!}
                            </div>
                            <div class="form-group col-xs-6">
                                <label>Direccion</label>
                                {!! Form::text( 'dl57', $dl[5]->direccion ,  ['class' => 'form-control'] ) !!}
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-xs-6">
                                <label>Telefono</label>
                                {!! Form::number( 'dl58', $dl[5]->telefono ,  ['class' => 'form-control'] ) !!}
                            </div>
                            <div class="form-group col-xs-6">
                                <label>Puesto</label>
                                {!! Form::text( 'dl59', $dl[5]->puesto ,  ['class' => 'form-control'] ) !!}
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-xs-6">
                                <label>Jefe Inmediato</label>
                                {!! Form::text( 'dl60', $dl[5]->jefe_inmediato ,  ['class' => 'form-control'] ) !!}
                            </div>
                            <div class="form-group col-xs-6">
                                <label>Puesto del Jefe inmediato</label>
                                {!! Form::text( 'dl61', $dl[5]->puesto_jefe_inmediato ,  ['class' => 'form-control'] ) !!}
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-xs-6">
                                <label>Fecha inicio</label>
                                {!! Form::text( 'dl62', $dl[5]->fecha_inicio ,  ['class' => 'form-control'] ) !!}
                            </div>
                            <div class="form-group col-xs-6">
                                <label>Fecha de Salida</label>
                                {!! Form::text( 'dl63', $dl[5]->fecha_retiro ,  ['class' => 'form-control'] ) !!}
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-xs-6">
                                <label>Ultimo salario</label>
                                {!! Form::number( 'dl64', $dl[5]->ultimo_salario ,  ['class' => 'form-control'] ) !!}
                            </div>
                            <div class="form-group col-xs-6">
                                <label>Motivo de retiro</label>
                                <textarea  class="form-control" name="dl65" placeholder="Motivo de terio" rows="3" required>{{ $dl[5]->motivo_despido }}</textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-xs-12">
                                <label>Referencia objtenida Empresa</label>
                                <textarea  class="form-control" name="dl66" placeholder="Referencia obtenida por parte de la empresa" rows="3" required>{{ $dl[5]->referencia_obtenida }}</textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Septima Empresa -->
                <div class="row lab6" @if( $dl[6]->empresa === '-----' )  style="display: none"  @endif>
                    <div class="col-sm-10 col-sm-offset-1">
                        <hr>
                        <div class="row">
                            <div class="form-group col-xs-6">
                                <label>Empresa</label>
                                {!! Form::text( 'dl67', $dl[6]->empresa ,  ['class' => 'form-control'] ) !!}
                            </div>
                            <div class="form-group col-xs-6">
                                <label>Direccion</label>
                                {!! Form::text( 'dl68', $dl[6]->direccion ,  ['class' => 'form-control'] ) !!}
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-xs-6">
                                <label>Telefono</label>
                                {!! Form::number( 'dl69', $dl[6]->telefono ,  ['class' => 'form-control'] ) !!}
                            </div>
                            <div class="form-group col-xs-6">
                                <label>Puesto</label>
                                {!! Form::text( 'dl70', $dl[6]->puesto ,  ['class' => 'form-control'] ) !!}
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-xs-6">
                                <label>Jefe Inmediato</label>
                                {!! Form::text( 'dl71', $dl[6]->jefe_inmediato ,  ['class' => 'form-control'] ) !!}
                            </div>
                            <div class="form-group col-xs-6">
                                <label>Puesto del Jefe inmediato</label>
                                {!! Form::text( 'dl72', $dl[6]->puesto_jefe_inmediato ,  ['class' => 'form-control'] ) !!}
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-xs-6">
                                <label>Fecha inicio</label>
                                {!! Form::text( 'dl73', $dl[6]->fecha_inicio ,  ['class' => 'form-control'] ) !!}
                            </div>
                            <div class="form-group col-xs-6">
                                <label>Fecha de Salida</label>
                                {!! Form::text( 'dl74', $dl[6]->fecha_retiro ,  ['class' => 'form-control'] ) !!}
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-xs-6">
                                <label>Ultimo salario</label>
                                {!! Form::number( 'dl75', $dl[6]->ultimo_salario ,  ['class' => 'form-control'] ) !!}
                            </div>
                            <div class="form-group col-xs-6">
                                <label>Motivo de retiro</label>
                                <textarea  class="form-control" name="dl76" placeholder="Motivo de terio" rows="3" required>{{ $dl[6]->motivo_despido }}</textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-xs-12">
                                <label>Referencia objtenida Empresa</label>
                                <textarea  class="form-control" name="dl77" placeholder="Referencia obtenida por parte de la empresa" rows="3" required>{{ $dl[6]->referencia_obtenida }}</textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Octava Empresa  -->
                <div class="row lab7" @if( $dl[7]->empresa === '-----' )  style="display: none"  @endif >
                    <div class="col-sm-10 col-sm-offset-1">
                        <hr>
                        <div class="row">
                            <div class="form-group col-xs-6">
                                <label>Empresa</label>
                                {!! Form::text( 'dl78', $dl[7]->empresa ,  ['class' => 'form-control'] ) !!}
                            </div>
                            <div class="form-group col-xs-6">
                                <label>Direccion</label>
                                {!! Form::text( 'dl79', $dl[7]->direccion ,  ['class' => 'form-control'] ) !!}
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-xs-6">
                                <label>Telefono</label>
                                {!! Form::number( 'dl80', $dl[7]->telefono ,  ['class' => 'form-control'] ) !!}
                            </div>
                            <div class="form-group col-xs-6">
                                <label>Puesto</label>
                                {!! Form::text( 'dl81', $dl[7]->puesto ,  ['class' => 'form-control'] ) !!}
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-xs-6">
                                <label>Jefe Inmediato</label>
                                {!! Form::text( 'dl82', $dl[7]->jefe_inmediato ,  ['class' => 'form-control'] ) !!}
                            </div>
                            <div class="form-group col-xs-6">
                                <label>Puesto del Jefe inmediato</label>
                                {!! Form::text( 'dl83', $dl[7]->puesto_jefe_inmediato ,  ['class' => 'form-control'] ) !!}
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-xs-6">
                                <label>Fecha inicio</label>
                                {!! Form::text( 'dl84', $dl[7]->fecha_inicio ,  ['class' => 'form-control'] ) !!}
                            </div>
                            <div class="form-group col-xs-6">
                                <label>Fecha de Salida</label>
                                {!! Form::text( 'dl85', $dl[7]->fecha_retiro ,  ['class' => 'form-control'] ) !!}
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-xs-6">
                                <label>Ultimo salario</label>
                                {!! Form::number( 'dl86', $dl[7]->ultimo_salario ,  ['class' => 'form-control'] ) !!}
                            </div>
                            <div class="form-group col-xs-6">
                                <label>Motivo de retiro</label>
                                <textarea  class="form-control" name="dl87" placeholder="Motivo de terio" rows="3" required>{{ $dl[7]->motivo_despido }}</textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-xs-12">
                                <label>Referencia objtenida Empresa</label>
                                <textarea  class="form-control" name="dl88" placeholder="Referencia obtenida por parte de la empresa" rows="3" required>{{ $dl[7]->referencia_obtenida }}</textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Novena Empresa  -->
                <div class="row lab8" @if( $dl[8]->empresa === '-----' )  style="display: none"  @endif>
                    <div class="col-sm-10 col-sm-offset-1">
                        <hr>
                        <div class="row">
                            <div class="form-group col-xs-6">
                                <label>Empresa</label>
                                {!! Form::text( 'dl89', $dl[8]->empresa ,  ['class' => 'form-control'] ) !!}
                            </div>
                            <div class="form-group col-xs-6">
                                <label>Direccion</label>
                                {!! Form::text( 'dl90', $dl[8]->direccion ,  ['class' => 'form-control'] ) !!}
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-xs-6">
                                <label>Telefono</label>
                                {!! Form::number( 'dl91', $dl[8]->telefono ,  ['class' => 'form-control'] ) !!}
                            </div>
                            <div class="form-group col-xs-6">
                                <label>Puesto</label>
                                {!! Form::text( 'dl92', $dl[8]->puesto ,  ['class' => 'form-control'] ) !!}
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-xs-6">
                                <label>Jefe Inmediato</label>
                                {!! Form::text( 'dl93', $dl[8]->jefe_inmediato ,  ['class' => 'form-control'] ) !!}
                            </div>
                            <div class="form-group col-xs-6">
                                <label>Puesto del Jefe inmediato</label>
                                {!! Form::text( 'dl94', $dl[8]->puesto_jefe_inmediato ,  ['class' => 'form-control'] ) !!}
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-xs-6">
                                <label>Fecha inicio</label>
                                {!! Form::text( 'dl95', $dl[8]->fecha_inicio ,  ['class' => 'form-control'] ) !!}
                            </div>
                            <div class="form-group col-xs-6">
                                <label>Fecha de Salida</label>
                                {!! Form::text( 'dl96', $dl[8]->fecha_retiro ,  ['class' => 'form-control'] ) !!}
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-xs-6">
                                <label>Ultimo salario</label>
                                {!! Form::number( 'dl97', $dl[8]->ultimo_salario ,  ['class' => 'form-control'] ) !!}
                            </div>
                            <div class="form-group col-xs-6">
                                <label>Motivo de retiro</label>
                                <textarea  class="form-control" name="dl98" placeholder="Motivo de terio" rows="3" required>{{ $dl[8]->motivo_despido }}</textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-xs-12">
                                <label>Referencia objtenida Empresa</label>
                                <textarea  class="form-control" name="dl99" placeholder="Referencia obtenida por parte de la empresa" rows="3" required>{{ $dl[8]->referencia_obtenida }}</textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Decima Empresa  -->
                <div class="row lab9" @if( $dl[9]->empresa === '-----' )  style="display: none"  @endif>
                    <div class="col-sm-10 col-sm-offset-1">
                        <hr>
                        <div class="row">
                            <div class="form-group col-xs-6">
                                <label>Empresa</label>
                                {!! Form::text( 'dl100', $dl[9]->empresa ,  ['class' => 'form-control'] ) !!}
                            </div>
                            <div class="form-group col-xs-6">
                                <label>Direccion</label>
                                {!! Form::text( 'dl101', $dl[9]->direccion ,  ['class' => 'form-control'] ) !!}
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-xs-6">
                                <label>Telefono</label>
                                {!! Form::number( 'dl102', $dl[9]->telefono ,  ['class' => 'form-control'] ) !!}
                            </div>
                            <div class="form-group col-xs-6">
                                <label>Puesto</label>
                                {!! Form::text( 'dl103', $dl[9]->puesto ,  ['class' => 'form-control'] ) !!}
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-xs-6">
                                <label>Jefe Inmediato</label>
                                {!! Form::text( 'dl104', $dl[9]->jefe_inmediato ,  ['class' => 'form-control'] ) !!}
                            </div>
                            <div class="form-group col-xs-6">
                                <label>Puesto del Jefe inmediato</label>
                                {!! Form::text( 'dl105', $dl[9]->puesto_jefe_inmediato ,  ['class' => 'form-control'] ) !!}
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-xs-6">
                                <label>Fecha inicio</label>
                                {!! Form::text( 'dl106', $dl[9]->fecha_inicio ,  ['class' => 'form-control'] ) !!}
                            </div>
                            <div class="form-group col-xs-6">
                                <label>Fecha de Salida</label>
                                {!! Form::text( 'dl107', $dl[9]->fecha_retiro ,  ['class' => 'form-control'] ) !!}
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-xs-6">
                                <label>Ultimo salario</label>
                                {!! Form::number( 'dl108', $dl[9]->ultimo_salario ,  ['class' => 'form-control'] ) !!}
                            </div>
                            <div class="form-group col-xs-6">
                                <label>Motivo de retiro</label>
                                <textarea  class="form-control" name="dl109" placeholder="Motivo de terio" rows="3" required>{{ $dl[9]->motivo_despido }}</textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-xs-12">
                                <label>Referencia objtenida Empresa</label>
                                <textarea  class="form-control" name="dl110" placeholder="Referencia obtenida por parte de la empresa" rows="3" required>{{ $dl[9]->referencia_obtenida }}</textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Boton Agregar -->
                <div class="row">
                    <div class="col-sm-10 col-sm-offset-1">
                        <div class="row">
                            <!--Telefono casa -->
                            <div class="form-group col-xs-12">
                                <input type='button' class='btn btn-fill btn-danger btn-wd btn-sm' id="addLab" value='Agregar' />
                            </div>
                        </div>
                        <hr>
                    </div>
                </div>

            </div>



    <!-- Presupuesto Familiar -->
    <div class="tab-pane" id="presupuesto">
        <div class="row">
            <div class="col-sm-10 col-sm-offset-1">
                <div class="row">
                    <table class="table table-hover ">
                        <thead>
                        <tr>
                            <th >Descripcion</th>
                            <th >Ingresos</th>
                            <th >Egresos</th>
                            <th >Diferencia</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach(config('presupuesto.inputs') as $key => $description)
                            <tr>
                                <th><label>{{ $description }}</label></th>
                                <th>
                                    <input type = "number" value="{{$pf[$key]->ingresos}}" class = "form-control pf" style="text-align: center" name="ingreso{{ $key + 1 }}" id="pf{{ $key + 1 }}">
                                </th>
                                <th>
                                    <input type = "number" value="{{$pf[$key]->egresos}}" class = "form-control pf" style="text-align: center" name="egreso{{ $key + 1 }}" id="pf2{{ $key + 1 }}">
                                </th>
                                <th>
                                    <input type = "number" value="{{$pf[$key]->diferencia}}" class = "form-control pf" style="text-align: center" name="diferencia{{ $key + 1 }}" id="pf3{{ $key + 1 }}">
                                </th>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Condiciones de Residencia -->
    <div class="tab-pane" id="residencia">
        <div class="row">
            <div class="col-sm-10 col-sm-offset-1">
                <div class="row">
                    <div class="row">
                        <div class="form-group col-xs-6">
                            <label>¿La vivienda es propia?</label>
                            {!! Form::select( 'hd1', ['Si' => 'Si', 'No' => 'No'] , $ho[0]->hd1 , ['class' => 'form-control'] ) !!}
                        </div>
                        <div class="form-group col-xs-6">
                            <label>¿Numero de habitacion?</label>
                            <input type = "number" class = "form-control" name = "hd2" placeholder = "Numero de habitaciones" value = "{{ $ho[0]->hd2 }}" >
                        </div>
                    <div class="row">
                    </div>
                        <div class="form-group col-xs-6">
                            <label>¿Material con la que esta construida la vivienda?</label>
                            {!! Form::select( 'hd3', ['Lamina' => 'Lamina', 'Block' => 'Block'] , $ho[0]->hd3 , ['class' => 'form-control'] ) !!}
                        </div>
                        <div class="form-group col-xs-6">
                            <label>¿Material del techo?</label>
                            {!! Form::select( 'hd4', ['Lamina' => 'Lamina', 'Terraza' => 'Terraza'] , $ho[0]->hd4 , ['class' => 'form-control'] ) !!}
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-xs-6">
                            <label>¿Material del piso?</label>
                            {!! Form::select( 'hd5', ['Ceramico' => 'Ceramico', 'Cemento' => 'Cemento', 'Tierra' => 'Tierra' ] , $ho[0]->hd5 , ['class' => 'form-control'] ) !!}
                        </div>
                        <div class="form-group col-xs-6">
                            <label>¿Posee vehiculo pripio?</label>
                            {!! Form::select( 'hd6', ['Si' => 'Si', 'No' => 'No'] , $ho[0]->hd6 , ['class' => 'form-control'] ) !!}
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-xs-6">
                            <label>¿Posee motocicleta pripia?</label>
                            {!! Form::select( 'hd7', ['Si' => 'Si', 'No' => 'No'] , $ho[0]->hd7 , ['class' => 'form-control'] ) !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Salud -->
    <div class="tab-pane" id="salud">
        <div class="row">
            <div class="col-sm-10 col-sm-offset-1">
                <!-- salud -->
                <p class="bg-primary info-text">Cuadro de salud</p>
                <div class="row">
                    <table class="table table-hover ">
                        <thead>
                        <tr>
                            <th >Descripcion</th>
                            <th >Parte afectada</th>
                            <th >Fecha</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th><label>¿Ha sufrido alguna Fractura?</label></th>
                            <th>
                                {!! Form::select( 'sa1', ['Si' => 'Si', 'No' => 'No'] , $sa[0]->sa1 , ['class' => 'form-control'] ) !!}
                            </th>
                            <th>
                                {!! Form::text( 'sa2', $sa[0]->sa2 ,  ['class' => 'form-control'] ) !!}
                            </th>
                        </tr>

                        <tr>
                            <th><label>¿Ha tenido alguna operacion?</label></th>
                            <th>
                                {!! Form::select( 'sa3', ['Si' => 'Si', 'No' => 'No'] , $sa[0]->sa3 , ['class' => 'form-control'] ) !!}
                            </th>
                            <th>
                                {!! Form::text( 'sa4', $sa[0]->sa4,  ['class' => 'form-control'] ) !!}
                            </th>
                        </tr>
                        <tr>
                            <th><label>¿Actualmente toma algun medicamento?</label></th>
                            <th>
                                {!! Form::select( 'sa5', ['Si' => 'Si', 'No' => 'No'] , $sa[0]->sa5 , ['class' => 'form-control'] ) !!}
                            </th>
                            <th>
                                {!! Form::text( 'sa6', $sa[0]->sa6 ,  ['class' => 'form-control'] ) !!}
                            </th>
                        </tr>
                        <tr>
                            <th><label>¿Utiliza anteojos?</label></th>
                            <th>
                                {!! Form::select( 'sa7', ['Si' => 'Si', 'No' => 'No'] , $sa[0]->sa7 , ['class' => 'form-control'] ) !!}
                            </th>
                            <th>
                                {!! Form::text( 'sa8', $sa[0]->sa8 ,  ['class' => 'form-control'] ) !!}
                            </th>
                        </tr>
                        <tr>
                            <th><label>¿Tiene algun tatuaje?</label></th>
                            <th>
                                {!! Form::select( 'sa9', ['Si' => 'Si', 'No' => 'No'] , $sa[0]->sa9 , ['class' => 'form-control'] ) !!}
                            </th>
                            <th>
                                {!! Form::text( 'sa10', $sa[0]->sa10 ,  ['class' => 'form-control'] ) !!}
                            </th>
                        </tr>
                        </tbody>
                    </table>
                </div>

                <!-- Vicios-->
                <p class="bg-primary info-text">Vicios y drogras</p>
                <div class="row">
                    <table class="table table-hover ">
                        <thead>
                        <tr>
                            <th>Vicios y drogas</th>
                            <th>Respuestas</th>
                            <th>Detalles</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th><label>¿Consume Alcohol?</label></th>
                            <th>
                                {!! Form::select( 'vi1', ['Si' => 'Si', 'No' => 'No'] , $vi[0]->vi1 , ['class' => 'form-control'] ) !!}
                            </th>
                            <th>
                                {!! Form::text( 'vi2', $vi[0]->vi2 ,  ['class' => 'form-control'] ) !!}
                            </th>
                        </tr>
                        <tr>
                            <th><label>¿Fuma?</label></th>
                            <th>
                                {!! Form::select( 'vi3', ['Si' => 'Si', 'No' => 'No'] , $vi[0]->vi3 , ['class' => 'form-control'] ) !!}
                            </th>
                            <th>
                                {!! Form::text( 'vi4', $vi[0]->vi4 ,  ['class' => 'form-control'] ) !!}
                            </th>
                        </tr>
                        <tr>
                            <th><label>¿Consume Drogas?</label></th>
                            <th>
                                {!! Form::select( 'vi5', ['Si' => 'Si', 'No' => 'No'] , $vi[0]->vi5 , ['class' => 'form-control'] ) !!}
                            </th>
                            <th>
                                {!! Form::text( 'vi6', $vi[0]->vi6 ,  ['class' => 'form-control'] ) !!}
                            </th>
                        </tr>

                        <tr>
                            <th><label>¿Conoce las drogras Fisicamente?</label></th>
                            <th>
                                {!! Form::select( 'vi7', ['Si' => 'Si', 'No' => 'No'] , $vi[0]->vi7 , ['class' => 'form-control'] ) !!}
                            </th>
                            <th>
                                {!! Form::text( 'vi8', $vi[0]->vi8 ,  ['class' => 'form-control'] ) !!}
                            </th>
                        </tr>


                        <tr>
                            <th><label>¿Tiene algun tatuaje?</label></th>
                            <th>
                                {!! Form::select( 'vi9', ['Si' => 'Si', 'No' => 'No'] , $vi[0]->vi9 , ['class' => 'form-control'] ) !!}
                            </th>
                            <th>
                                {!! Form::text( 'vi10', $vi[0]->vi10 ,  ['class' => 'form-control'] ) !!}
                            </th>
                        </tr>

                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>

    <!-- Vecinos -->
    <div class="tab-pane" id = "vecinos">
        <div class="row">
            <div class="col-sm-10 col-sm-offset-1">
                <div class="row">
                    @foreach(config('presupuesto.vecinos') as $key => $description)
                        <?php $field = "v" . ($key + 1); ?>
                        <div class="row">
                            <div class="form-group col-xs-12">
                                <label>{{ $description }}</label>
                                {!! Form::text( $field  ,$ve[0]->$field , ['class' => 'form-control'] ) !!}
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>



    <!-- Pie de pagina-->
    <div class="wizard-footer">
        <div class="pull-right">
            <input type='button' class='btn btn-next btn-fill btn-info btn-wd btn-sm' name='next' value='Siguiente' />
            <input type='button' class='btn btn-finish btn-fill btn-info btn-wd btn-sm' name='update' value='Confirmar Cambios' />
        </div>
        <div class="pull-left">
            <input type='button' class='btn btn-previous btn-fill btn-info btn-wd btn-sm' name='previous' value='Atras' />
        </div>
        <div class="clearfix">

        </div>
    </div>
    </div>
    </form>
    </div><!-- Final-->


    <script>
        $("#btn-cancelar").click(function(e){
            $("#page").load("ballots");
        });



        function calcularTotal(){
            var total = 0;
            for (var i = 1 ; i <= 23; i++) {
                var ingreso = $('#pf'+i).val();
                var egreso  = $('#pf2'+i).val();
                var resultado = $('#pf3'+i);
                total = total + (ingreso - egreso);

                if (total < 0) {
                    resultado.css("background","red");
                }
                else {
                    resultado.css("background","white");
                }


                resultado.val(total);
            };

        };

        $(".pf").focusout(calcularTotal);


        var conteo = 1;
        $("#addBrother").click(function(e){
            $(".bro" + conteo).css("display","block");
            conteo++;
        });

        var conteo2 = 1;
        $("#addLab").click(function(e){
            $(".lab" + conteo2).css("display","block");
            conteo2++;
        });


        function archivo(evt) {
            var files = evt.target.files; // FileList object

            // Obtenemos la imagen del campo "file".
            for (var i = 0, f; f = files[i]; i++) {
                //Solo admitimos imágenes.
                if (!f.type.match('image.*')) {
                    continue;
                }

                var reader = new FileReader();

                reader.onload = (function(theFile) {
                    return function(e) {
                        // Insertamos la imagen
                        document.getElementById("lista").innerHTML = ['<img class="img-thumbnail"  style="width: 25%;" src="', e.target.result,'" title="', escape(theFile.name), '"/>'].join('');
                    };
                })(f);

                reader.readAsDataURL(f);
            }
        }

        document.getElementById('files').addEventListener('change', archivo, false);




    </script>


    {!! Html::script('app/helpers/crud_operate.js') !!}
    {!! Html::script('app/admin/generate.js') !!}


    {!! Html::script('wizar/js/jquery.bootstrap.wizard.js') !!}
    {!! Html::script('wizar/js/wizard.js') !!}


@stop
