@extends('admin.list.list')

@section('list-title')
    Nuevo Registro
@stop

@section('buttons')
    <a href="#" id="btn-cancelar" class="btn btn-next btn-fill btn-danger btn-wd btn-sm" >Cancelar</a>
@stop

@section('list-content')
    @parent

    <div class="wizard-container">
      <form action="ballots" method="POST" name = "form-wizar" id = "form-create" >
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
                    <input type="text" class="form-control" name="puesto_empresa" placeholder="Puesto al que aplica" required>
                  </div>
                  <!-- pellidos -->
                  <div class="form-group col-xs-6">
                    <label>¿Empresa cliente?</label>
                    <input type="text" class="form-control" name="nombre_empresa" placeholder="Nombre de la empresa" required>
                  </div>
                </div>
                <div class="row">
                  <!-- Nombres -->
                  <div class="form-group col-xs-6">
                    <label>¿Cual es su nombre?</label>
                    <input type="text" class="form-control" id="dp1" name="dp1" placeholder="Nombres" required>
                  </div>
                  <!-- pellidos -->
                  <div class="form-group col-xs-6">
                    <label>¿Cuales son sus apellido?</label>
                    <input type="text" class="form-control" id="dp2" name="dp2" placeholder="Apellidos" required>
                  </div>
                </div>
                <div class="row">
                  <!--Telefono casa -->
                  <div class="form-group col-xs-6">
                    <label>¿Cual es el numero del telefono de su casa?</label>
                    <input type = "number" class = "form-control" id = "dp3" name = "dp3" placeholder = "Teléfono de Casa" required>
                  </div>
                  <!-- Celular -->
                  <div class="form-group col-xs-6">
                    <label>¿Cual es su numero de Celular?</label>
                    <input type = "number" class = "form-control" id = "dp4" name = "dp4" placeholder = "Teléfono Celular" required>
                  </div>
                </div>
                <div class="row">
                  <!--Profesion -->
                  <div class="form-group col-xs-6">
                    <label>¿Cual es su edad?</label>
                    <input type = "number" class = "form-control" id = "dp5" name = "dp5" placeholder = "Edad" required>
                  </div>
                  <!--Profesion -->
                  <div class="form-group col-xs-6">
                    <label>¿Cual es su profesion?</label>
                    <input type = "text" class = "form-control" id = "dp6" name = "dp6" placeholder = "Profesion" required>
                  </div>
                </div>
                <div class="row">
                  <!--Estado Civil -->
                  <div class="form-group col-xs-6">
                    <label>Elija su estado Civil</label>
                    <select class="form-control col-xs-6" id = "dp7" name = "dp7">
                      <option>Casado</option>
                      <option>Soltero</option>
                      <option>Divorciado</option>
                      <option>Viudo</option>
                    </select>
                  </div>
                  <!-- DPI -->
                  <div class="form-group col-xs-6">
                    <label>¿Cual es su numero de DPI?</label>
                    <input type = "number" class = "form-control" id = "dp8" name = "dp8" placeholder = "DPI" required>
                  </div>
                </div>
                <div class="row">
                  <!--Profesion -->

                  <div class="form-group col-xs-6">
                    <label>¿Cual es su numero de NIT?</label>
                    <input type = "text" class = "form-control" id = "dp9" name = "dp9" placeholder = "NIT" required>
                  </div>


                  <!--Profesion -->
                  <div class="form-group col-xs-6">
                    <label>¿Posee licencia de conducir?</label>
                    <select class="form-control col-xs-6" id = "dp10" name = "dp10">
                      <option>Si</option>
                      <option>No</option>
                    </select>
                  </div>
                </div>
                <div class="row">
                  <!--Profesion -->
                  <div class="form-group col-xs-6">
                    <label>¿Que tipo de licencia posee?</label>
                    <select class="form-control col-xs-6" id = "dp11" name = "dp11">
                      <option>Ninguna</option>
                      <option>Tipo A</option>
                      <option>Tipo B</option>
                      <option>Tipo C</option>
                      <option>Tipo M</option>
                      <option>Tipo E</option>
                    </select>
                  </div>
                  <!--Profesion -->
                  <div class="form-group col-xs-6">
                    <label>¿Cual es su Numero de licencia?</label>
                    <input type = "number" class="form-control" placeholder = "Numero de licencia" id = "dp12" name = "dp12">
                  </div>
                </div>
                <div class="row">
                  <!--Profesion -->
                  <div class="form-group col-xs-6">
                    <label>¿Cual es su religion?</label>
                    <input type = "text" class = "form-control" id = "dp13" name = "dp13" placeholder = "Religion" required>
                  </div>
                  <!--Profesion -->
                  <div class="form-group col-xs-6">
                    <label>¿Cual es su tipo de sangre?</label>
                    <input type = "text" class = "form-control" id = "dp14" name = "dp14" placeholder = "Tipo de sangre" required>
                  </div>
                </div>
                <div class="row">
                  <!-- Direccion de la persona -->
                  <div class="col-sm-12">
                    <div class="form-group">
                      <label>¿Cual es la direccion donde vive ?</label>
                      <input type = "text" class = "form-control" id = "dp15" name = "dp15" placeholder = "Direccion completa" required>
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
                    <input type="text" class="form-control" id="df1" name="df1" placeholder="Nombres" required>
                  </div>
                  <!-- Edad -->
                  <div class="form-group col-xs-6">
                    <label>Edad</label>
                    <input type="number" class="form-control" id="df2" name="df2" placeholder="Edad" required>
                  </div>
                </div>
                <div class="row">
                  <!-- Originario de -->
                  <div class="form-group col-xs-6">
                    <label>Originario de</label>
                    <input type="text" class="form-control" id="df3" name="df3" placeholder="Originario de" required>
                  </div>
                  <!-- Ingresos Aproximados -->
                  <div class="form-group col-xs-6">
                    <label>Ingresos aproximados</label>
                    <input type="number" class="form-control" id="df4" name="df4" placeholder="Ingresos aproximados" required>
                  </div>
                </div>
                <div class="row">
                  <!-- A que se dedica -->
                  <div class="form-group col-xs-6">
                    <label>A que se dedica</label>
                    <input type="text" class="form-control" id="df5" name="df5" placeholder="A que se dedica" required>
                  </div>
                  <!-- Numero Telefonico -->
                  <div class="form-group col-xs-6">
                    <label>Numero Telefonico</label>
                    <input type="number" class="form-control" id="df6" name="df6" placeholder="Numero telefonico" required>
                  </div>
                </div>
                <div class="row">
                  <!-- Direccion de la persona -->
                  <div class="col-sm-12">
                    <div class="form-group">
                      <label>Direccion completa</label>
                      <input type = "text" class = "form-control" id = "df7" name = "df7" placeholder = "Direccion completa" required>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <!--Telefono casa -->
                  <div class="form-group col-xs-12"
                    <label>Relacion con su Padre</label>
                    <textarea  class="form-control" id="df8" name="df8" placeholder="Relación con su padre" rows="3" required></textarea>
                  </div>
                </div>
                <!-- Relacion con su madre -->
                <p class="bg-primary info-text">Informacion de la Madre</p>
                <div class="row">
                  <!-- Nombres del padre -->
                  <div class="form-group col-xs-6">
                    <label>Nombre de la madre</label>
                    <input type="text" class="form-control" id="df9" name="df9" placeholder="Nombres" >
                  </div>
                  <!-- Edad -->
                  <div class="form-group col-xs-6">
                    <label>Edad</label>
                    <input type="number" class="form-control" id="df10" name="df10" placeholder="Edad" >
                  </div>
                </div>
                <div class="row">
                  <!-- Originario de -->
                  <div class="form-group col-xs-6">
                    <label>Originario de</label>
                    <input type="text" class="form-control" id="df11" name="df11" placeholder="Originario de" >
                  </div>

                  <!-- Ingresos aproximados -->
                  <div class="form-group col-xs-6">
                    <label>Ingresos aproximados</label>
                    <input type="number" class="form-control" id="df12" name="df12" placeholder="Ingresos aproximados" >
                  </div>
                </div>
                <div class="row">
                  <!-- A que se dedica -->
                  <div class="form-group col-xs-6">
                    <label>A que se dedica</label>
                    <input type="text" class="form-control" id="df13" name="df13" placeholder="A que se dedica" >
                  </div>
                  <!-- Numero telefonico -->
                  <div class="form-group col-xs-6">
                    <label>Numero Telefonico</label>
                    <input type="number" class="form-control" id="df14" name="df14" placeholder="Numero telefonico" >
                  </div>
                </div>
                <div class="row">
                  <!-- Direccion de la persona -->
                  <div class="col-sm-12">
                    <div class="form-group">
                      <label>Direccion completa</label>
                      <input type = "text" class = "form-control" id = "df15" name = "df15" placeholder = "Direccion completa" >
                    </div>
                  </div>
                </div>
                <div class="row">
                  <!--Telefono casa -->
                  <div class="form-group col-xs-12"
                    <label>Relacion con su madre</label>
                    <textarea  class="form-control" id="df16" name="df16" placeholder="Relación con su madre" rows="3"> </textarea>
                  </div>
                </div>
                <!-- Relacion con su esposo -->
                <p class="bg-primary info-text">Informacion del cónyuge</p>
                <div class="row">
                  <!-- Nombres del esposo -->
                  <div class="form-group col-xs-6">
                    <label>Nombre del cónyuge</label>
                    <input type="text" class="form-control" id="df17" name="df17" placeholder="Nombres" required>
                  </div>
                  <!-- Edad -->
                  <div class="form-group col-xs-6">
                    <label>Edad</label>
                    <input type="number" class="form-control" id="df18" name="df18" placeholder="Edad" required>
                  </div>
                </div>
                <div class="row">
                  <!-- Originario de -->
                  <div class="form-group col-xs-6">
                    <label>Originario de</label>
                    <input type="text" class="form-control" id="df19" name="df19" placeholder="Originario de" required>
                  </div>

                  <!-- Ingresos aproximados -->
                  <div class="form-group col-xs-6">
                    <label>Ingresos aproximados</label>
                    <input type="number" class="form-control" id="df20" name="df20" placeholder="Ingresos aproximados" required>
                  </div>
                </div>
                <div class="row">
                  <!-- A que se dedica -->
                  <div class="form-group col-xs-6">
                    <label>A que se dedica</label>
                    <input type="text" class="form-control" id="df21" name="df21" placeholder="A que se dedica" required>
                  </div>
                  <!-- Numero telefonico -->
                  <div class="form-group col-xs-6">
                    <label>Numero Telefonico</label>
                    <input type="number" class="form-control" id="df22" name="df22" placeholder="Numero telefonico" required>
                  </div>
                </div>
                <div class="row">
                  <!-- Direccion de la persona -->
                  <div class="col-sm-12">
                    <div class="form-group">
                      <label>Direccion completa</label>
                      <input type = "text" class = "form-control" id = "df23" name = "df23" placeholder = "Direccion completa" required>
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
                      <input type = "number" class = "form-control" name = "df79" placeholder = "Numero de hijos" required>
                    </div>
                  </div>
                </div>

                <div class="row">
                   <div class="form-group col-xs-6">
                     <label>¿Tiene o tuvo un familiar privado de su libertad ?</label>
                     <select class="form-control col-xs-6" name = "df80">
                       <option>Si</option>
                       <option>No</option>
                     </select>
                   </div>
                   <div class="form-group col-xs-6">
                     <textarea name="df81" class = "form-control" rows="4" cols="40"></textarea>
                   </div>
               </div>

                <!-- Informacion de los hermanos -->
                <p class="bg-primary info-text">Informacion sobre Hermanos</p>


                  <div class="row">
                    <!-- Nombres del esposo -->
                    <div class="form-group col-xs-6">
                      <label>Nombre completo</label>
                      <input type="text" class="form-control" id="df24" name="df24" placeholder="Nombres" required>
                    </div>
                    <!-- Edad -->
                    <div class="form-group col-xs-6">
                      <label>Edad</label>
                      <input type="number" class="form-control" id="df25" name="df25" placeholder="Edad" required>
                    </div>
                  </div>
                  <div class="row">
                    <!-- A que se dedica -->
                    <div class="form-group col-xs-6">
                      <label>A que se dedica</label>
                      <input type="text" class="form-control" id="df26" name="df26" placeholder="A que se dedica" required>
                    </div>
                    <!-- Numero telefonico -->
                    <div class="form-group col-xs-6">
                      <label>Numero Telefonico</label>
                      <input type="number" class="form-control" id="df27" name="df27" placeholder="Numero telefonico" required>
                    </div>
                  </div>
                  <div class="row">
                    <!-- Observaciones -->
                    <div class="col-sm-12">
                      <div class="form-group">
                        <label>Observacion</label>
                        <input type = "text" class = "form-control" id = "df28" name = "df28" placeholder = "Direccion completa" required>
                      </div>
                    </div>
                  </div>

                  <div class="row bro1" style="display: none">
                    <!-- Nombres del esposo -->
                    <div class="form-group col-xs-6">
                      <label>Nombre completo</label>
                      <input type="text" class="form-control" id="df29" name="df29" placeholder="Nombres" required>
                    </div>
                    <!-- Edad -->
                    <div class="form-group col-xs-6">
                      <label>Edad</label>
                      <input type="number" class="form-control" id="df30" name="df30" placeholder="Edad" required>
                    </div>
                  </div>
                  <div class="row bro1" style="display: none">
                    <!-- A que se dedica -->
                    <div class="form-group col-xs-6">
                      <label>A que se dedica</label>
                      <input type="text" class="form-control" id="df31" name="df31" placeholder="A que se dedica" required>
                    </div>
                    <!-- Numero telefonico -->
                    <div class="form-group col-xs-6">
                      <label>Numero Telefonico</label>
                      <input type="number" class="form-control" id="df32" name="df32" placeholder="Numero telefonico" required>
                    </div>
                  </div>
                  <div class="row bro1" style="display:none" >
                    <!-- Observaciones -->
                    <div class="col-sm-12">
                      <div class="form-group">
                        <label>Observacion</label>
                        <input type = "text" class = "form-control" id = "df33" name = "df33" placeholder = "Direccion completa" required>
                      </div>
                    </div>

                  </div>
                  <div class="row bro2" style="display: none">
                    <!-- Nombres del esposo -->
                    <div class="form-group col-xs-6">
                      <label>Nombre completo</label>
                      <input type="text" class="form-control" id="df34" name="df34" placeholder="Nombres" required>
                    </div>
                    <!-- Edad -->
                    <div class="form-group col-xs-6">
                      <label>Edad</label>
                      <input type="number" class="form-control" id="df35" name="df35" placeholder="Edad" required>
                    </div>
                  </div>
                  <div class="row bro2" style="display: none">
                    <!-- A que se dedica -->
                    <div class="form-group col-xs-6">
                      <label>A que se dedica</label>
                      <input type="text" class="form-control" id="df36" name="df36" placeholder="A que se dedica" required>
                    </div>
                    <!-- Numero telefonico -->
                    <div class="form-group col-xs-6">
                      <label>Numero Telefonico</label>
                      <input type="number" class="form-control" id="df37" name="df37" placeholder="Numero telefonico" required>
                    </div>
                  </div>
                  <div class="row bro2" style="display:none" >
                    <!-- Observaciones -->
                    <div class="col-sm-12">
                      <div class="form-group">
                        <label>Observacion</label>
                        <input type = "text" class = "form-control" id = "df38" name = "df38" placeholder = "Direccion completa" required>
                      </div>
                    </div>
                  </div>

                  <div class="row bro3" style="display: none">
                    <!-- Nombres del esposo -->
                    <div class="form-group col-xs-6">
                      <label>Nombre completo</label>
                      <input type="text" class="form-control" id="df39" name="df39" placeholder="Nombres" required>
                    </div>
                    <!-- Edad -->
                    <div class="form-group col-xs-6">
                      <label>Edad</label>
                      <input type="number" class="form-control" id="df40" name="df40" placeholder="Edad" required>
                    </div>
                  </div>
                  <div class="row bro3" style="display: none">
                    <!-- A que se dedica -->
                    <div class="form-group col-xs-6">
                      <label>A que se dedica</label>
                      <input type="text" class="form-control" id="df41" name="df41" placeholder="A que se dedica" required>
                    </div>
                    <!-- Numero telefonico -->
                    <div class="form-group col-xs-6">
                      <label>Numero Telefonico</label>
                      <input type="number" class="form-control" id="df42" name="df42" placeholder="Numero telefonico" required>
                    </div>
                  </div>
                  <div class="row bro3" style="display:none" >
                    <!-- Observaciones -->
                    <div class="col-sm-12">
                      <div class="form-group">
                        <label>Observacion</label>
                        <input type = "text" class = "form-control" id = "df43" name = "df43" placeholder = "Direccion completa" required>
                      </div>
                    </div>
                  </div>


                  <div class="row bro4" style="display: none">
                    <!-- Nombres del esposo -->
                    <div class="form-group col-xs-6">
                      <label>Nombre completo</label>
                      <input type="text" class="form-control" id="df44" name="df44" placeholder="Nombres" required>
                    </div>
                    <!-- Edad -->
                    <div class="form-group col-xs-6">
                      <label>Edad</label>
                      <input type="number" class="form-control" id="df45" name="df45" placeholder="Edad" required>
                    </div>
                  </div>
                  <div class="row bro4" style="display: none">
                    <!-- A que se dedica -->
                    <div class="form-group col-xs-6">
                      <label>A que se dedica</label>
                      <input type="text" class="form-control" id="df46" name="df46" placeholder="A que se dedica" required>
                    </div>
                    <!-- Numero telefonico -->
                    <div class="form-group col-xs-6">
                      <label>Numero Telefonico</label>
                      <input type="number" class="form-control" id="df47" name="df47" placeholder="Numero telefonico" required>
                    </div>
                  </div>
                  <div class="row bro4" style="display:none" >
                    <!-- Observaciones -->
                    <div class="col-sm-12">
                      <div class="form-group">
                        <label>Observacion</label>
                        <input type = "text" class = "form-control" id = "df48" name = "df48" placeholder = "Direccion completa" required>
                      </div>
                    </div>
                  </div>


                  <div class="row bro5" style="display: none">
                    <!-- Nombres del esposo -->
                    <div class="form-group col-xs-6">
                      <label>Nombre completo</label>
                      <input type="text" class="form-control" id="df49" name="df49" placeholder="Nombres" required>
                    </div>
                    <!-- Edad -->
                    <div class="form-group col-xs-6">
                      <label>Edad</label>
                      <input type="number" class="form-control" id="df50" name="df50" placeholder="Edad" required>
                    </div>
                  </div>
                  <div class="row bro5" style="display: none">
                    <!-- A que se dedica -->
                    <div class="form-group col-xs-6">
                      <label>A que se dedica</label>
                      <input type="text" class="form-control" id="df51" name="df51" placeholder="A que se dedica" required>
                    </div>
                    <!-- Numero telefonico -->
                    <div class="form-group col-xs-6">
                      <label>Numero Telefonico</label>
                      <input type="number" class="form-control" id="df52" name="df52" placeholder="Numero telefonico" required>
                    </div>
                  </div>
                  <div class="row bro5" style="display:none" >
                    <!-- Observaciones -->
                    <div class="col-sm-12">
                      <div class="form-group">
                        <label>Observacion</label>
                        <input type = "text" class = "form-control" id = "df53" name = "df53" placeholder = "Direccion completa" required>
                      </div>
                    </div>
                  </div>


                  <div class="row bro6" style="display: none">
                    <!-- Nombres del esposo -->
                    <div class="form-group col-xs-6">
                      <label>Nombre completo</label>
                      <input type="text" class="form-control" id="df54" name="df54" placeholder="Nombres" required>
                    </div>
                    <!-- Edad -->
                    <div class="form-group col-xs-6">
                      <label>Edad</label>
                      <input type="number" class="form-control" id="df55" name="df55" placeholder="Edad" required>
                    </div>
                  </div>
                  <div class="row bro6" style="display: none">
                    <!-- A que se dedica -->
                    <div class="form-group col-xs-6">
                      <label>A que se dedica</label>
                      <input type="text" class="form-control" id="df56" name="df56" placeholder="A que se dedica" required>
                    </div>
                    <!-- Numero telefonico -->
                    <div class="form-group col-xs-6">
                      <label>Numero Telefonico</label>
                      <input type="number" class="form-control" id="df57" name="df57" placeholder="Numero telefonico" required>
                    </div>
                  </div>
                  <div class="row bro6" style="display:none" >
                    <!-- Observaciones -->
                    <div class="col-sm-12">
                      <div class="form-group">
                        <label>Observacion</label>
                        <input type = "text" class = "form-control" id = "df58" name = "df58" placeholder = "Direccion completa" required>
                      </div>
                    </div>
                  </div>


                  <div class="row bro7" style="display: none">
                    <!-- Nombres del esposo -->
                    <div class="form-group col-xs-6">
                      <label>Nombre completo</label>
                      <input type="text" class="form-control" id="df59" name="df59" placeholder="Nombres" required>
                    </div>
                    <!-- Edad -->
                    <div class="form-group col-xs-6">
                      <label>Edad</label>
                      <input type="number" class="form-control" id="df60" name="df60" placeholder="Edad" required>
                    </div>
                  </div>
                  <div class="row bro7" style="display: none">
                    <!-- A que se dedica -->
                    <div class="form-group col-xs-6">
                      <label>A que se dedica</label>
                      <input type="text" class="form-control" id="df61" name="df61" placeholder="A que se dedica" required>
                    </div>
                    <!-- Numero telefonico -->
                    <div class="form-group col-xs-6">
                      <label>Numero Telefonico</label>
                      <input type="number" class="form-control" id="df62" name="df62" placeholder="Numero telefonico" required>
                    </div>
                  </div>
                  <div class="row bro7" style="display:none" >
                    <!-- Observaciones -->
                    <div class="col-sm-12">
                      <div class="form-group">
                        <label>Observacion</label>
                        <input type = "text" class = "form-control" id = "df63" name = "df63" placeholder = "Direccion completa" required>
                      </div>
                    </div>
                  </div>

                  <div class="row bro8" style="display: none">
                    <!-- Nombres del esposo -->
                    <div class="form-group col-xs-6">
                      <label>Nombre completo</label>
                      <input type="text" class="form-control" id="df64" name="df64" placeholder="Nombres" required>
                    </div>
                    <!-- Edad -->
                    <div class="form-group col-xs-6">
                      <label>Edad</label>
                      <input type="number" class="form-control" id="df65" name="df65" placeholder="Edad" required>
                    </div>
                  </div>
                  <div class="row bro8" style="display: none">
                    <!-- A que se dedica -->
                    <div class="form-group col-xs-6">
                      <label>A que se dedica</label>
                      <input type="text" class="form-control" id="df66" name="df66" placeholder="A que se dedica" required>
                    </div>
                    <!-- Numero telefonico -->
                    <div class="form-group col-xs-6">
                      <label>Numero Telefonico</label>
                      <input type="number" class="form-control" id="df67" name="df67" placeholder="Numero telefonico" required>
                    </div>
                  </div>
                  <div class="row bro8" style="display:none" >
                    <!-- Observaciones -->
                    <div class="col-sm-12">
                      <div class="form-group">
                        <label>Observacion</label>
                        <input type = "text" class = "form-control" id = "df68" name = "df68" placeholder = "Direccion completa" required>
                      </div>
                    </div>
                  </div>
                  <div class="row bro9" style="display: none">
                    <!-- Nombres del esposo -->
                    <div class="form-group col-xs-6">
                      <label>Nombre completo</label>
                      <input type="text" class="form-control" id="df69" name="df69" placeholder="Nombres" required>
                    </div>
                    <!-- Edad -->
                    <div class="form-group col-xs-6">
                      <label>Edad</label>
                      <input type="number" class="form-control" id="df70" name="df70" placeholder="Edad" required>
                    </div>
                  </div>
                  <div class="row bro9" style="display: none">
                    <!-- A que se dedica -->
                    <div class="form-group col-xs-6">
                      <label>A que se dedica</label>
                      <input type="text" class="form-control" id="df71" name="df71" placeholder="A que se dedica" required>
                    </div>
                    <!-- Numero telefonico -->
                    <div class="form-group col-xs-6">
                      <label>Numero Telefonico</label>
                      <input type="number" class="form-control" id="df72" name="df72" placeholder="Numero telefonico" required>
                    </div>
                  </div>
                  <div class="row bro9" style="display:none" >
                    <!-- Observaciones -->
                    <div class="col-sm-12">
                      <div class="form-group">
                        <label>Observacion</label>
                        <input type = "text" class = "form-control" id = "df73" name = "df73" placeholder = "Direccion completa" required>
                      </div>
                    </div>
                  </div>
                  <div class="row bro10" style="display: none">
                    <!-- Nombres del esposo -->
                    <div class="form-group col-xs-6">
                      <label>Nombre completo</label>
                      <input type="text" class="form-control" id="df74" name="df74" placeholder="Nombres" required>
                    </div>
                    <!-- Edad -->
                    <div class="form-group col-xs-6">
                      <label>Edad</label>
                      <input type="number" class="form-control" id="df75" name="df75" placeholder="Edad" required>
                    </div>
                  </div>
                  <div class="row bro10" style="display: none">
                    <!-- A que se dedica -->
                    <div class="form-group col-xs-6">
                      <label>A que se dedica</label>
                      <input type="text" class="form-control" id="df76" name="df76" placeholder="A que se dedica" required>
                    </div>
                    <!-- Numero telefonico -->
                    <div class="form-group col-xs-6">
                      <label>Numero Telefonico</label>
                      <input type="number" class="form-control" id="df77" name="df77" placeholder="Numero telefonico" required>
                    </div>
                  </div>
                  <div class="row bro10" style="display:none" >
                    <!-- Observaciones -->
                    <div class="col-sm-12">
                      <div class="form-group">
                        <label>Observacion</label>
                        <input type = "text" class = "form-control" id = "df78" name = "df78" placeholder = "Direccion completa" required>
                      </div>
                    </div>
                  </div>
                <input type='button' class='btn btn-fill btn-danger btn-wd btn-sm' id="addBrother" value='Agregar' />
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
                    <input type="text" class="form-control" id="de1" name="de1" placeholder="Nombre del establecimiento" required>
                  </div>
                  <!-- Edad -->
                  <div class="form-group col-xs-4">
                    <label>Direccion</label>
                    <input type="text" class="form-control" id="de2" name="de2" placeholder="Direccion del establecimiento" required>
                  </div>
                  <!-- Edad -->
                  <div class="form-group col-xs-2">
                    <label>Fecha</label>
                    <input type="text" class="form-control" id="de3" name="de3" placeholder="Rango fecha" required>
                  </div>
                </div>

                <p class="bg-primary info-text">Educacion Secundaria</p>
                <div class="row">
                  <div class="form-group col-xs-6">
                    <label>Establecimiento</label>
                    <input type="text" class="form-control" id="de4" name="de4" placeholder="Nombres del establecimiento" required>
                  </div>
                  <!-- Edad -->
                  <div class="form-group col-xs-4">
                    <label>Direccion</label>
                    <input type="text" class="form-control" id="de5" name="de5" placeholder="Direccion del establecimiento" required>
                  </div>
                  <!-- Edad -->
                  <div class="form-group col-xs-2">
                    <label>Fecha</label>
                    <input type="text" class="form-control" id="de6" name="de6" placeholder="Rango fecha" required>
                  </div>
                </div>

                <p class="bg-primary info-text">Educacion Diversificado</p>
                <div class="row">
                  <!-- Establecimiento-->
                  <div class="form-group col-xs-8">
                    <label>Establecimiento</label>
                    <input type="text" class="form-control" id="de7" name="de7" placeholder="Nombre del establecimiento" required>
                  </div>
                  <!-- Edad -->
                  <div class="form-group col-xs-4">
                    <label>Direccion</label>
                    <input type="text" class="form-control" id="de8" name="de8" placeholder="Direccion del establecimiento" required>
                  </div>

                  <div class="form-group col-xs-8">
                    <label>Titulo</label>
                    <input type="text" class="form-control" id="de9" name="de9" placeholder="Titulo adquirido" required>
                  </div>

                  <!-- Edad -->
                  <div class="form-group col-xs-4">
                    <label>Fecha</label>
                    <input type="text" class="form-control" id="de10" name="de10" placeholder="Rango fecha" required>
                  </div>
                </div>

                <p class="bg-primary info-text">Educacion Universidad</p>
                <div class="row">
                  <!-- Establecimiento-->
                  <div class="form-group col-xs-8">
                    <label>Establecimiento</label>
                    <input type="text" class="form-control" id="de11" name="de11" placeholder="Nombre del establecimiento" required>
                  </div>
                  <!-- Edad -->
                  <div class="form-group col-xs-4">
                    <label>Direccion</label>
                    <input type="text" class="form-control" id="de12" name="de12" placeholder="Direccion del establecimiento" required>
                  </div>

                  <div class="form-group col-xs-8">
                    <label>Titulo</label>
                    <input type="text" class="form-control" id="de13" name="de13" placeholder="Titulo educativo" required>
                  </div>

                  <!-- Edad -->
                  <div class="form-group col-xs-4">
                    <label>Fecha</label>
                    <input type="text" class="form-control" id="de14" name="de14" placeholder="Rango fecha" required>
                  </div>

                <!-- Observacion -->
                  <div class="form-group col-xs-12">
                    <label>Observacion</label>
                    <input type="text" class="form-control" id="de15" name="de15" placeholder="Rango fecha" required>
                  </div>

                </div>

              </div>
            </div>
          </div>

          <!-- Informacion Laboral -->
          <div class="tab-pane" id="laboral">


            <?php $contador = 1; ?>
            @for ($i = 1; $i < 11; $i++ )
                <div class="row lab{{ $i }}" @if($i != 1 )  style="display: none" @endif>
                  <div class="col-sm-10 col-sm-offset-1">
                    <h4>Referencia laboral #{{ $i }}</h4>
                    <hr>
                    <div class="row">
                      <div class="form-group col-xs-6">
                        <label>Empresa</label>
                        <input type = "text" class = "form-control" name = "dl{{$contador++}}" placeholder = "Nombre de la empresa" required>
                      </div>

                      <div class="form-group col-xs-6">
                        <label>Direccion</label>
                        <input type = "text" class = "form-control" name = "dl{{$contador++}}" placeholder = "Direccion de la empresa" required>
                      </div>
                    </div>

                    <div class="row">
                      <div class="form-group col-xs-6">
                        <label>Telefono</label>
                        <input type = "number" class = "form-control" name = "dl{{$contador++}}" placeholder = "Numero telefonico de la empresa" required>
                      </div>
                      <div class="form-group col-xs-6">
                        <label>Puesto</label>
                        <input type = "text" class = "form-control" name = "dl{{$contador++}}" placeholder = "Puesto que desempeño" required>
                      </div>
                    </div>

                    <div class="row">
                      <div class="form-group col-xs-6">
                        <label>Jefe Inmediato</label>
                        <input type = "text" class = "form-control" name = "dl{{$contador++}}" placeholder = "Nombre del jefe inmediato" required>
                      </div>
                      <div class="form-group col-xs-6">
                        <label>Puesto del Jefe inmediato</label>
                        <input type = "text" class = "form-control" name = "dl{{$contador++}}" placeholder = "Puesto del Jefe inmediato" required>
                      </div>
                    </div>

                    <div class="row">
                      <div class="form-group col-xs-6">
                        <label>Fecha inicio</label>
                        <input type = "text" class = "form-control" name = "dl{{$contador++}}" placeholder = "Fecha de inicio de labores" required>
                      </div>
                      <div class="form-group col-xs-6">
                        <label>Fecha de Salida</label>
                        <input type = "text" class = "form-control" name = "dl{{$contador++}}" placeholder = "Fecha de salida de la empresa" required>
                      </div>
                    </div>

                    <div class="row">
                      <div class="form-group col-xs-6">
                        <label>Ultimo salario</label>
                        <input type = "number" class = "form-control" name = "dl{{$contador++}}" placeholder = "Ultimo salario" required>
                      </div>
                      <div class="form-group col-xs-6">
                        <label>Motivo de retiro</label>
                        <textarea  class="form-control" name="dl{{$contador++}}" placeholder="Motivo de terio" rows="3" required></textarea>
                      </div>
                    </div>

                    <div class="row">
                      <!--Telefono casa -->
                      <div class="form-group col-xs-12">
                        <h4>Referencia obtenidad de la empresa</h4>
                        <hr>
                      </div>
                    </div>


                    <div class="row">

                      <div class="form-group col-xs-6">
                        <label>Departamento que confirma</label>
                        <input type = "text" class = "form-control" name = "dl{{$contador++}}" placeholder = "Departamento que confirma" required>
                      </div>

                      <div class="form-group col-xs-6">
                        <label>Puesto desempeñado</label>
                        <input type = "text" class = "form-control" name = "dl{{$contador++}}" placeholder = "Puesto desempeñado" required>
                      </div>

                    </div>

                    <div class="row">

                      <div class="form-group col-xs-6">
                        <label>Fortalezas laborales</label>
                        <input type = "text" class = "form-control" name = "dl{{$contador++}}" placeholder = "Fortalezas laborales" required>
                      </div>

                      <div class="form-group col-xs-6">
                        <label>Áreas de mejora</label>
                        <input type = "text" class = "form-control" name = "dl{{$contador++}}" placeholder = "Área de mejora" required>
                      </div>

                    </div>

                    <div class="row">

                      <div class="form-group col-xs-6">
                        <label>Le aparecen llamadas de atención</label>
                        <select class="form-control col-xs-6" name = "dl{{$contador++}}">
                          <option>Si</option>
                          <option>No</option>
                        </select>
                      </div>

                      <div class="form-group col-xs-6">
                        <label>Fechas en las que laboró</label>
                        <input type = "text" class = "form-control" name = "dl{{$contador++}}" placeholder = "2015/01/01 al 2015/12/31" required>
                      </div>

                    </div>

                    <div class="row">

                      <div class="form-group col-xs-6">
                        <label>Motivo del retiro</label>
                        <input type = "text" class = "form-control" name = "dl{{$contador++}}" placeholder = "Motivo del retiro" required>
                      </div>

                      <div class="form-group col-xs-6">
                        <label>Quien cofirma</label>
                        <input type = "text" class = "form-control" name = "dl{{$contador++}}" placeholder = "Quien confirma" required>
                      </div>
                    </div>

                    <div class="row">

                      <div class="form-group col-xs-6">
                        <label>Mencione como fue su desempeño</label>
                        <input type = "text" class = "form-control" name = "dl{{$contador++}}" placeholder = "Mencione como fue su desempeño" required>
                      </div>
                      <!-- Motivo de retiro  -->
                      <div class="form-group col-xs-6">
                        <label>Fortaleza laboral</label>
                        <input type = "text" class = "form-control" name = "dl{{$contador++}}" placeholder = "Fortaleza laboral" required>
                      </div>
                    </div>

                    <div class="row">

                      <div class="form-group col-xs-6">
                        <label>Área de mejora</label>
                        <input type = "text" class = "form-control" name = "dl{{$contador++}}" placeholder = "Área de mejora" required>
                      </div>

                      <div class="form-group col-xs-6">
                        <label>Como fueron sus relaciones interpersonales</label>
                        <input type = "text" class = "form-control" name = "dl{{$contador++}}" placeholder = "Como fueron sus relaciones interpersonales" required>
                      </div>
                    </div>

                    <div class="row">
                      <div class="form-group col-xs-12">
                        <label>Motivo de retiro</label>
                        <input type = "text" class = "form-control" name = "dl{{$contador++}}" placeholder = "Motivo de retiro" required>
                      </div>
                    </div>

                  </div>
                </div>
            @endfor

            <div class="row">
              <div class="col-sm-10 col-sm-offset-1">
                <div class="row">
                  <!--Telefono casa -->
                  <div class="form-group col-xs-12">
                    <input type='button' class='btn btn-fill btn-danger btn-wd btn-sm' id="addLab" value='Agregar' />
                  </div>
                </div>
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
                            <input type = "number" value="0" class = "form-control pf" style="text-align: center" name="ingreso{{ $key + 1 }}" id="pf{{ $key + 1 }}">
                          </th>
                          <th>
                            <input type = "number" value="0" class = "form-control pf" style="text-align: center" name="egreso{{ $key + 1 }}" id="pf2{{ $key + 1 }}">
                          </th>
                          <th>
                            <input type = "number" value="0" class = "form-control pf" style="text-align: center" name="diferencia{{ $key + 1 }}" id="pf3{{ $key + 1 }}">
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
                        <select class="form-control col-xs-6" name = "hd1">
                          <option>Si</option>
                          <option>No</option>
                        </select>
                      </div>
                      <div class="form-group col-xs-6">
                        <label>¿Numero de habitacion?</label>
                        <input type = "number" class = "form-control" name = "hd2" placeholder = "Numero de habitaciones" required>
                      </div>
                  </div>

                  <div class="row">
                    <div class="form-group col-xs-6">
                        <label>¿Material con la que esta construida la vivienda?</label>
                        <select class="form-control col-xs-6" name = "hd3">
                          <option>Lamina</option>
                          <option>Block</option>
                          <option>Formaleta</option>
                          <option>Adobe</option>
                        </select>
                    </div>
                    <div class="form-group col-xs-6">
                        <label>¿Material del techo?</label>
                        <select class="form-control col-xs-6" name = "hd4">
                          <option>Lamina</option>
                          <option>Terraza</option>
                        </select>
                    </div>
                  </div>

                  <div class="row">
                    <div class="form-group col-xs-6">
                        <label>¿Material del piso?</label>
                        <select class="form-control col-xs-6" name = "hd5">
                          <option>Ceramico</option>
                          <option>Cemento</option>
                          <option>Tierra</option>
                        </select>
                    </div>
                    <div class="form-group col-xs-6">
                        <label>¿Posee vehiculo pripio?</label>
                        <select class="form-control col-xs-6" name = "hd6">
                          <option>Si</option>
                          <option>No</option>
                        </select>
                    </div>
                  </div>


                  <div class="row">
                    <div class="form-group col-xs-6">
                        <label>¿Posee motocicleta pripia?</label>
                        <select class="form-control col-xs-6" name = "hd7">
                          <option>Si</option>
                          <option>No</option>
                        </select>
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
                            <select class="form-control col-xs-6" name="sa1" >
                              <option>Si</option>
                              <option>No</option>
                            </select>
                          </th>
                          <th>
                            <input type = "text" value="" class = "form-control" name="sa2">
                          </th>
                        </tr>

                        <tr>
                          <th><label>¿Ha tenido alguna operacion?</label></th>
                          <th>
                            <select class="form-control col-xs-6" name="sa3" >
                              <option>Si</option>
                              <option>No</option>
                            </select>
                          </th>
                          <th>
                            <input type = "text" value="" class = "form-control" name="sa4">
                          </th>
                        </tr>
                          <tr>
                          <th><label>¿Actualmente toma algun medicamento?</label></th>
                          <th>
                            <select class="form-control col-xs-6" name="sa5" >
                              <option>Si</option>
                              <option>No</option>
                            </select>
                          </th>
                          <th>
                            <input type = "text" value="" class = "form-control" name="sa6">
                          </th>
                        </tr>
                          <tr>
                          <th><label>¿Utiliza anteojos?</label></th>
                          <th>
                            <select class="form-control col-xs-6" name="sa7" >
                              <option>Si</option>
                              <option>No</option>
                            </select>
                          </th>
                          <th>
                            <input type = "text" value="" class = "form-control" name="sa8">
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
                            <select class="form-control col-xs-6" name = "vi1">
                              <option>Si</option>
                              <option>No</option>
                            </select>
                          </th>
                          <th>
                            <input type = "text" value="" class = "form-control" name="vi2" >
                          </th>
                        </tr>


                        <tr>
                          <th><label>¿Fuma?</label></th>
                          <th>
                            <select class="form-control col-xs-6" name = "vi3">
                              <option>Si</option>
                              <option>No</option>
                            </select>
                          </th>
                          <th>
                            <input type = "text" value="" class = "form-control" name="vi4" >
                          </th>
                        </tr>


                        <tr>
                          <th><label>¿Consume Drogas?</label></th>
                          <th>
                            <select class="form-control col-xs-6" name = "vi5">
                              <option>Si</option>
                              <option>No</option>
                            </select>
                          </th>
                          <th>
                            <input type = "text" value="" class = "form-control" name="vi6" >
                          </th>
                        </tr>


                        <tr>
                          <th><label>¿Conoce las drogras Fisicamente?</label></th>
                          <th>
                            <select class="form-control col-xs-6" name = "vi7">
                              <option>Si</option>
                              <option>No</option>
                            </select>
                          </th>
                          <th>
                            <input type = "text" value="" class = "form-control" name="vi8" >
                          </th>
                        </tr>
                        <tr>
                          <th><label>¿Tiene algun tatuaje?</label></th>
                          <th>
                            <select class="form-control col-xs-6" name = "vi9">
                              <option>Si</option>
                              <option>No</option>
                            </select>
                          </th>
                          <th>
                            <input type = "text" value="" class = "form-control" name="vi10" >
                          </th>
                        </tr>
                        <tr>
                          <th><label>¿Usted  tiene o ha tenido alguna demanda o problemas Legal?</label></th>
                          <th>
                            <select class="form-control col-xs-6" name = "vi11">
                              <option>Si</option>
                              <option>No</option>
                            </select>
                          </th>
                          <th>
                            <textarea name="vi12" rows="4" cols="40" class="form-control col-xs-6"></textarea>
                          </th>
                        </tr>
                    </tbody>
                  </table>
                </div>

              </div>
            </div>
          </div>
          <div class="tab-pane" id = "vecinos">
              <div class="row">
                  <div class="col-sm-10 col-sm-offset-1">
                      <?php $indice = 1; ?>
                      @for ($i = 1; $i < 4; $i++)
                          <div class="row">
                              <h3>Referencia personales #{{{ $i }}} </h3>
                              @foreach(config('presupuesto.vecinos') as $key => $description)
                                  <?php $field = "v" . $indice ?>
                                  <div class="row">
                                      <div class="form-group col-xs-12">
                                          <label>{{ $description }}</label>
                                          {!! Form::text( $field  ,null, ['class' => 'form-control'] ) !!}
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
                        <th style="text-align:center;" ><img src="default.png" id="mm{{ $field }}" width='50' height='50' ></th>
                      </tr>
                    @endforeach
                  </tbody>
                </table>
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
              <input type='button' class='btn btn-finish btn-fill btn-info btn-wd btn-sm' name='finish' value='Confirmar' />
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

  var conteo2 = 2;
  $("#addLab").click(function(e){
    $(".lab" + conteo2).css("display","block");
    conteo2++;
  });

    var theParent = document.querySelector("#content-file");
    theParent.addEventListener('change',archivo, false);
    function archivo(evt) {
      var id = evt.target.id;
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
            $("#mm"+ id).attr("src", e.target.result);
          };
        })(f);
        reader.readAsDataURL(f);
      }
    }

</script>


{!! Html::script('app/helpers/crud_operate.js') !!}
{!! Html::script('app/admin/generate.js') !!}


{!! Html::script('wizar/js/jquery.bootstrap.wizard.js') !!}
{!! Html::script('wizar/js/wizard.js') !!}
{!! Html::script('wizar/js/ajaxupload-v1.2.js') !!}


@stop
