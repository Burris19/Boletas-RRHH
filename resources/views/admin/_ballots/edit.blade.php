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
                    <li><a href="#archivos" data-toggle="tab">Archivos</a></li>
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
                                        {!! Form::select( 'dp11', [ 'Ninguna' => 'Ninguna','Tipo A' => 'Tipo A', 'Tipo B' => 'Tipo B', 'Tipo C' => 'Tipo C' , 'Tipo M' => 'Tipo M', 'Tipo M' => 'Tipo M'] , $dp[0]->dp11 , ['class' => 'form-control'] ) !!}
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
                        <p class="bg-primary info-text">Información del cónyuge</p>
                        <div class="row">
                            <!-- Nombres del esposo -->
                            <div class="form-group col-xs-6">
                                <label>Nombre del cónyuge</label>
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
                        <p class="bg-primary info-text">Informacion adicional</p>
                        <div class="row">
                            <!-- Numero de Hijos -->
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label>Numero de hijos</label>
                                    {!! Form::text( 'df79', $dfp[0]->hijos ,  ['class' => 'form-control'] ) !!}
                                </div>
                            </div>
                        </div>

                        <div class="row">
                           <div class="form-group col-xs-6">
                             <label>¿Tiene o tuvo un familiar privado de su libertad ?</label>
                             {!! Form::select( 'df80', ['Si' => 'Si', 'No' => 'No'] , $dfp[0]->familiares_presos , ['class' => 'form-control'] ) !!}
                           </div>
                           <div class="form-group col-xs-6">
                               {!! Form::textarea( 'df81', $dfp[0]->descripcion_familiares_presos ,  ['class' => 'form-control', 'rows' => 4, 'cols' => 40 ] ) !!}
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
              <?php $indice = 0; $contador = 1; ?>
              @for ($i = 0 ; $i < 10; $i++ )
                  <div class="row lab{{ $i }}" @if( $dl[$indice]->empresa === '-----' ) @if( $i != 0 ) style="display: none" @endif  @endif >
                    <div class="col-sm-10 col-sm-offset-1">
                      <h4>Referencia laboral #{{ $i+1 }}</h4>
                      <hr>
                      <div class="row">
                          <div class="form-group col-xs-6">
                              <label>Empresa</label>
                              <input type = "text" class = "form-control" name = "dl{{$contador++}}" value="{{ $dl[$indice]->empresa }}">
                          </div>
                          <div class="form-group col-xs-6">
                              <label>Direccion</label>
                              <input type = "text" class = "form-control" name = "dl{{$contador++}}" value="{{ $dl[$indice]->direccion }}">
                          </div>
                      </div>
                      <div class="row">
                          <div class="form-group col-xs-6">
                              <label>Telefono</label>
                              <input type = "number" class = "form-control" name = "dl{{$contador++}}" value="{{ $dl[$indice]->telefono }}">
                          </div>
                          <div class="form-group col-xs-6">
                              <label>Puesto</label>
                              <input type = "text" class = "form-control" name = "dl{{$contador++}}" value="{{ $dl[$indice]->puesto }}">
                          </div>
                      </div>
                      <div class="row">
                          <div class="form-group col-xs-6">
                              <label>Jefe Inmediato</label>
                              <input type = "text" class = "form-control" name = "dl{{$contador++}}" value="{{ $dl[$indice]->jefe_inmediato }}">
                          </div>
                          <div class="form-group col-xs-6">
                              <label>Puesto del Jefe inmediato</label>
                              <input type = "text" class = "form-control" name = "dl{{$contador++}}" value="{{ $dl[$indice]->puesto_jefe_inmediato }}">
                          </div>
                      </div>
                      <div class="row">
                          <div class="form-group col-xs-6">
                              <label>Fecha inicio</label>
                              <input type = "text" class = "form-control" name = "dl{{$contador++}}" value="{{ $dl[$indice]->fecha_inicio }}">
                          </div>
                          <div class="form-group col-xs-6">
                              <label>Fecha de Salida</label>
                              <input type = "text" class = "form-control" name = "dl{{$contador++}}" value="{{ $dl[$indice]->fecha_retiro }}">
                          </div>
                      </div>
                      <div class="row">
                          <div class="form-group col-xs-6">
                              <label>Ultimo salario</label>
                              <input type = "text" class = "form-control" name = "dl{{$contador++}}" value="{{ $dl[$indice]->ultimo_salario }}">
                          </div>
                          <div class="form-group col-xs-6">
                              <label>Motivo de retiro</label>
                              <textarea  class="form-control" name="dl{{$contador++}}" value="{{ $dl[$indice]->motivo_despido }}" placeholder="Motivo de terio" rows="3" required>{{ $dl[$i]->motivo_despido }}</textarea>
                          </div>
                      </div>
                      <div class="row">
                        <div class="form-group col-xs-12">
                          <h4>Referencia obtenidad de la empresa</h4>
                          <hr>
                        </div>
                      </div>
                      <div class="row">
                        <div class="form-group col-xs-6">
                          <label>Departamento que confirma</label>
                          <input type = "text" class = "form-control" name = "dl{{$contador++}}" value="{{ $dl[$indice]->departamento_que_confirma }}" placeholder = "Departamento que confirma" required>
                        </div>

                        <div class="form-group col-xs-6">
                          <label>Nombre y Puesto</label>
                          <input type = "text" class = "form-control" name = "dl{{$contador++}}" value="{{ $dl[$indice]->nombre_puesto }}" placeholder = "Puesto desempeñado" required>
                        </div>

                      </div>

                      <div class="row">

                        <div class="form-group col-xs-6">
                          <label>Fecha en la que laboró</label>
                          <input type = "text" class = "form-control" name = "dl{{$contador++}}" value="{{ $dl[$indice]->fechas_en_las_que_laboro }}" placeholder = "Fortalezas laborales" required>
                        </div>

                        <div class="form-group col-xs-6">
                          <label>Puesto que desempeño</label>
                          <input type = "text" class = "form-control" name = "dl{{$contador++}}" value="{{ $dl[$indice]->puesto_que_desempeño }}" placeholder = "Área de mejora" required>
                        </div>

                      </div>

                      <div class="row">

                        <div class="form-group col-xs-6">
                          <label>Tiene llamadas de atencion</label>
                          <?php $name = 'dl' . $contador++ ?>
                          {!! Form::select( $name, ['Si' => 'Si', 'No' => 'No'] , $dl[$indice]->tiene_llamadas_de_atencion , ['class' => 'form-control'] ) !!}
                        </div>

                        <div class="form-group col-xs-6">
                          <label>Motivo del retiro</label>
                          <input type = "text" class = "form-control" name = "dl{{$contador++}}" value="{{ $dl[$indice]->motivo_del_retiro }}" placeholder = "2015/01/01 al 2015/12/31" required>
                        </div>

                      </div>
                      <hr>

                      <div class="row">

                        <div class="form-group col-xs-6">
                          <label>Jefe Inmediato</label>
                          <input type = "text" class = "form-control" name = "dl{{$contador++}}" value="{{ $dl[$indice]->jefe_inmediato2 }}" placeholder = "Motivo del retiro" required>
                        </div>

                        <div class="form-group col-xs-6">
                          <label>Nombre y Puesto</label>
                          <input type = "text" class = "form-control" name = "dl{{$contador++}}" value="{{ $dl[$indice]->nombre_y_puesto }}" placeholder = "Quien confirma" required>
                        </div>
                      </div>

                      <div class="row">

                        <div class="form-group col-xs-6">
                          <label>Mencione como fue su desempeño</label>
                          <input type = "text" class = "form-control" name = "dl{{$contador++}}" value="{{ $dl[$indice]->desenpeño }}" placeholder = "Mencione como fue su desempeño" required>
                        </div>
                        <!-- Motivo de retiro  -->
                        <div class="form-group col-xs-6">
                          <label>Cual fue su fortaleza laboral</label>
                          <input type = "text" class = "form-control" name = "dl{{$contador++}}" value="{{ $dl[$indice]->fortaleza_laborales }}" placeholder = "Fortaleza laboral" required>
                        </div>
                      </div>

                      <div class="row">

                        <div class="form-group col-xs-6">
                          <label>Qué áreas debe de mejora</label>
                          <input type = "text" class = "form-control" name = "dl{{$contador++}}" value="{{ $dl[$indice]->area_de_mejora2 }}" placeholder = "Área de mejora" required>
                        </div>

                        <div class="form-group col-xs-6">
                          <label>Como fueron sus relaciones interpersonales</label>
                          <input type = "text" class = "form-control" name = "dl{{$contador++}}" value="{{ $dl[$indice]->como_fueron_sus_relaciones_interpersonales }}" placeholder = "Como fueron sus relaciones interpersonales" required>
                        </div>
                      </div>

                      <div class="row">
                        <div class="form-group col-xs-12">
                          <label>Motivo de retiro</label>
                          <input type = "text" class = "form-control" name = "dl{{$contador++}}" value="{{ $dl[$indice]->motivo_de_retiro2 }}" placeholder = "Motivo de retiro" required>
                        </div>
                      </div>

                    </div>
                  </div>
                   <?php $indice++ ?>
              @endfor
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
                                    <input type = "number" value="{{$pf[$key]->ingresos}}" class = "form-control pf" style="text-align: center" name="ingreso{{ $key + 1 }}" id="pi{{ $key + 1 }}">
                                </th>
                                <th>
                                    <input type = "number" value="{{$pf[$key]->egresos}}" class = "form-control pf" style="text-align: center" name="egreso{{ $key + 1 }}" id="pe{{ $key + 1 }}">
                                </th>
                                <th>
                                    <input type = "number" value="{{$pf[$key]->diferencia}}" class = "form-control pf" style="text-align: center" name="diferencia{{ $key + 1 }}" id="po{{ $key + 1 }}">
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
                            <label>Numero de habitaciones / de cuantos niveles es su casa</label>
                            <input type = "text" class = "form-control" name = "hd2" placeholder = "Numero de habitaciones" value = "{{ $ho[0]->hd2 }}" >
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
                            <label>¿Posee vehiculo propio?</label>
                            {!! Form::select( 'hd6', ['Si' => 'Si', 'No' => 'No'] , $ho[0]->hd6 , ['class' => 'form-control'] ) !!}
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-xs-6">
                            <label>¿Posee motocicleta propia?</label>
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

                        <tr>
                            <th><label>¿Usted  tiene o ha tenido alguna demanda o problemas Legal?</label></th>
                            <th>
                                {!! Form::select( 'vi11', ['Si' => 'Si', 'No' => 'No'] , $vi[0]->vi11 , ['class' => 'form-control'] ) !!}
                            </th>
                            <th>
                                {!! Form::textarea( 'vi12', $vi[0]->vi12 ,  ['class' => 'form-control', 'rows' => 4, 'cols' => 40 ] ) !!}
                            </th>
                        </tr>

                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>

    <!-- Informacion sobre los vecinos -->
    <div class="tab-pane" id = "vecinos">
        <div class="row">
            <div class="col-sm-10 col-sm-offset-1">
                <?php $indice = 1; ?>
                @for ($i = 1; $i < 4 ; $i++)
                    <div class="row">
                        <h3>Referencia personales #{{{ $i }}} </h3>
                        @foreach(config('presupuesto.vecinos') as $key => $description)
                            <?php $field = "v" . $indice; $x = ($i - 1); $value = "v" . ($key + 1 ) ;?>
                            <div class="row">
                                <div class="form-group col-xs-12">
                                    <label>{{ $description }}</label>
                                    {!! Form::text( $field  ,$ve[$x]->$value , ['class' => 'form-control'] ) !!}
                                </div>
                            </div>
                            <?php $indice++; ?>
                        @endforeach
                    </div>
                @endfor
            </div>
        </div>
    </div>

    <!-- pagina pra subir archivos -->
    <div class="tab-pane" id = "archivos">
        <div class="row">
            <div class="col-sm-10 col-sm-offset-1">
                <div class="row">
                    <div class="row">
                        <div class="form-group col-xs-12" id = "content-file">
                            <table class="table table-hover table-bordered">
                                <thead>
                                <tr>
                                    <th>Descripcion</th>
                                    <th style="width: 40px; text-align:center;">Seleccionar archivo</th>
                                    <th style="text-align:center;" >Vista Previa</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach(config('presupuesto.archivos') as $key => $description )
                                    <?php $field = "img".($key+1) ?>
                                    <?php $name = "input".($key+1) ?>
                                    <tr>
                                        <th>{{ $description }}</th>
                                        <th style="text-align:center; width: 40px;">
                                            <div style="background-image: url('cargar.png'); background-repeat: no-repeat; background-position: center center; " title="Seleccionar archivo desde su PC">
                                                <input type="file" style="outline: none; opacity: 0;" id="{{ $field }}" name="{{ $name }}"/>
                                            </div>
                                        </th>
                                        @if( $da[$key]->url === "-----")
                                            <th style="text-align:center;" ><img src="default.png" id="mm{{ $field }}" width='50' height='50' ></th>
                                        @else
                                            <th style="text-align:center;" ><img src="{{ $da[$key]->url }}" id="mm{{ $field }}" width='50' height='50' ></th>
                                        @endif

                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="row">
                        <!--Telefono casa -->
                        <div class="form-group col-xs-12"
                          <label>Observacion</label>
                          <textarea  class="form-control" name="observacion" rows="3" required> {{ $db->observacion }} </textarea>
                        </div>
                    </div>
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
                var ingreso = $('#pi'+i).val();
                var egreso  = $('#pe'+i).val();
                var resultado = $('#po'+i);
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
        var theParent = document.querySelector("#content-file");
        theParent.addEventListener('change',archivo, false);
        function archivo(evt) {
            var id = evt.target.id;
            var indice = id.substring(3,4);
            var files = evt.target.files; // FileList object
            // Obtenemos la imagen del campo "file".
            for (var i = 0, f; f = files[i]; i++) {

              if ( indice <= 6)
              {
                  if (!f.type.match('image.*')) {
                    alert("Solamente imagenes se aceptan");
                  }
                  else {
                      var reader = new FileReader();
                      reader.onload = (function(theFile) {
                        return function(e) {
                          // Insertamos la imagen
                          $("#mm"+ id).attr("src", e.target.result);
                        };
                      })(f);
                      reader.readAsDataURL(f);
                  }
              }else {
                if (!f.type.match('pdf.*')) {
                  alert("Debe seleccionar un PDF");
                }
              }

            }
        }

    </script>
    {!! Html::script('app/admin/generate.js') !!}
    {!! Html::script('app/helpers/crud_operate.js') !!}
    {!! Html::script('wizar/js/jquery.bootstrap.wizard.js') !!}
    {!! Html::script('wizar/js/wizard.js') !!}
@stop
