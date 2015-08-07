@extends('admin.list.list')

@section('list-title')
    Nuevo Registro
@stop

@section('buttons')
    <a href="#" id="btn-cancelar" class="btn btn-effect-ripple btn-important" >Cancelar</a>
@stop

@section('list-content')
    @parent
  
    <div class="wizard-container"> 
      <form action="" method="" name = "form-wizar">
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
                    <label>¿Cual es el numero de su telefono de Casa?</label>                    
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
                    <label>¿Cual es su numero de Nit?</label>
                    <input type = "number" class = "form-control" id = "dp9" name = "dp9" placeholder = "Nit" required>                    
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
                    <label>Elija su Religion</label>
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
                <div class="col-sm-12">
                  <div class="picture-container">
                    <div class="picture">
                      <img src="wizar/imagenes/default-avatar.png" class="picture-src" id="wizardPicturePreview" title=""/>
                      <input type="file" id="wizard-picture dp16" name = "dp16" >
                    </div>
                    <h6>Seleccionar Foto</h6>
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
                    <input type="text" class="form-control" id="df9" name="df9" placeholder="Nombres" required>
                  </div>
                  <!-- Edad -->
                  <div class="form-group col-xs-6">
                    <label>Edad</label>                    
                    <input type="number" class="form-control" id="df10" name="df10" placeholder="Edad" required>
                  </div>
                </div>
                <div class="row">
                  <!-- Originario de -->
                  <div class="form-group col-xs-6">
                    <label>Originario de</label>                    
                    <input type="text" class="form-control" id="df11" name="df11" placeholder="Originario de" required>
                  </div>

                  <!-- Ingresos aproximados -->
                  <div class="form-group col-xs-6">
                    <label>Ingresos aproximados</label>                    
                    <input type="number" class="form-control" id="df12" name="df12" placeholder="Ingresos aproximados" required>
                  </div>
                </div>
                <div class="row">                  
                  <!-- A que se dedica -->
                  <div class="form-group col-xs-6">
                    <label>A que se dedica</label>                    
                    <input type="text" class="form-control" id="df13" name="df13" placeholder="A que se dedica" required>
                  </div>
                  <!-- Numero telefonico -->
                  <div class="form-group col-xs-6">
                    <label>Numero Telefonico</label>                    
                    <input type="number" class="form-control" id="df14" name="df14" placeholder="Numero telefonico" required>
                  </div>
                </div>
                <div class="row">
                  <!-- Direccion de la persona -->
                  <div class="col-sm-12">
                    <div class="form-group">
                      <label>Direccion completa</label>                  
                      <input type = "text" class = "form-control" id = "df15" name = "df15" placeholder = "Direccion completa" required>                                    
                    </div>
                  </div>
                </div>
                <div class="row">
                  <!--Telefono casa -->
                  <div class="form-group col-xs-12"
                    <label>Relacion con su madre</label>  
                    <textarea  class="form-control" id="df16" name="df16" placeholder="Relación con su madre" rows="3" required></textarea>                                      
                  </div>
                </div>
                <!-- Relacion con su esposo -->
                <p class="bg-primary info-text">Informacion del esposo</p>
                <div class="row">
                  <!-- Nombres del esposo --> 
                  <div class="form-group col-xs-6">
                    <label>Nombre del esposo</label>                    
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

                <!-- Informacion Hijos -->
                <p class="bg-primary info-text">Informacion sobre Hijos</p>
                <div class="row">
                  <!-- Numero de Hijos -->
                  <div class="col-sm-12">
                    <div class="form-group">
                      <label>Numero de hijos</label>                  
                      <input type = "number" class = "form-control" id = "df79" name = "df79" placeholder = "Numero de hijos" required>                                    
                    </div>
                  </div>
                </div>
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

            <div class="row">
              <div class="col-sm-10 col-sm-offset-1">
                <div class="row">
                  <!-- Empresa  -->  
                  <div class="form-group col-xs-6">
                    <label>Empresa</label>
                    <input type = "text" class = "form-control" id = "dl1" name = "dl1" placeholder = "Nombre de la empresa" required>                    
                  </div>
                  <!-- Direccion empresa  -->  
                  <div class="form-group col-xs-6">
                    <label>Direccion</label>
                    <input type = "text" class = "form-control" id = "dl2" name = "dl2" placeholder = "Direccion de la empresa" required>                    
                  </div>
                </div>

                <div class="row">
                  <!-- Telefono  -->  
                  <div class="form-group col-xs-6">
                    <label>Telefono</label>
                    <input type = "number" class = "form-control" id = "dl3" name = "dl3" placeholder = "Numero telefonico de la empresa" required>                    
                  </div>
                  <!-- Cargo empresa  -->  
                  <div class="form-group col-xs-6">
                    <label>Puesto</label>
                    <input type = "text" class = "form-control" id = "dl4" name = "dl4" placeholder = "Puesto que desempeño" required>                    
                  </div>
                </div>

                <div class="row">
                  <!-- Jefe Inmediato  -->  
                  <div class="form-group col-xs-6">
                    <label>Jefe Inmediato</label>
                    <input type = "text" class = "form-control" id = "dl5" name = "dl5" placeholder = "Nombre del jefe inmediato" required>                    
                  </div>
                  <!-- Direccion empresa  -->  
                  <div class="form-group col-xs-6">
                    <label>Puesto del Jefe inmediato</label>
                    <input type = "text" class = "form-control" id = "dl6" name = "dl6" placeholder = "Puesto del Jefe inmediato" required>                    
                  </div>
                </div>  

                <div class="row">
                  <!-- Fecha de inicio  -->  
                  <div class="form-group col-xs-6">
                    <label>Fecha inicio</label>
                    <input type = "text" class = "form-control" id = "dl7" name = "dl7" placeholder = "Fecha de inicio de labores" required>                    
                  </div>
                  <!-- Fecha de salida  -->  
                  <div class="form-group col-xs-6">
                    <label>Fecha de Salida</label>
                    <input type = "text" class = "form-control" id = "dl8" name = "dl8" placeholder = "Fecha de salida de la empresa" required>                    
                  </div>
                </div>

                <div class="row">
                  <!-- Ultimo Salario  -->  
                  <div class="form-group col-xs-6">
                    <label>Ultimo salario</label>
                    <input type = "number" class = "form-control" id = "dl9" name = "dl9" placeholder = "Ultimo salario" required>                    
                  </div>
                  <!-- Motivo de retiro  -->  
                  <div class="form-group col-xs-6">
                    <label>Motivo de retiro</label>
                    <textarea  class="form-control" id="dl10" name="dl10" placeholder="Motivo de terio" rows="3" required></textarea>
                  </div>                  
                </div>

                <div class="row">
                  <!--Telefono casa -->
                  <div class="form-group col-xs-12"
                    <label>Referencia objtenida Empresa</label>  
                    <textarea  class="form-control" id="dl11" name="dl11" placeholder="Referencia obtenida por parte de la empresa" rows="3" required></textarea>                                      
                  </div>
                </div>

              </div>
            </div> 

            <div class="row lab1" style="display: none">
              <div class="col-sm-10 col-sm-offset-1">
                <div class="row">
                  <!-- Empresa  -->  
                  <div class="form-group col-xs-6">
                    <label>Empresa</label>
                    <input type = "text" class = "form-control" id = "dl12" name = "dl12" placeholder = "Nombre de la empresa" required>                    
                  </div>
                  <!-- Direccion empresa  -->  
                  <div class="form-group col-xs-6">
                    <label>Direccion</label>
                    <input type = "text" class = "form-control" id = "dl13" name = "dl13" placeholder = "Direccion de la empresa" required>                    
                  </div>
                </div>

                <div class="row">
                  <!-- Telefono  -->  
                  <div class="form-group col-xs-6">
                    <label>Telefono</label>
                    <input type = "number" class = "form-control" id = "dl14" name = "dl14" placeholder = "Numero telefonico de la empresa" required>                    
                  </div>
                  <!-- Cargo empresa  -->  
                  <div class="form-group col-xs-6">
                    <label>Puesto</label>
                    <input type = "text" class = "form-control" id = "dl15" name = "dl15" placeholder = "Puesto que desempeño" required>                    
                  </div>
                </div>

                <div class="row">
                  <!-- Jefe Inmediato  -->  
                  <div class="form-group col-xs-6">
                    <label>Jefe Inmediato</label>
                    <input type = "text" class = "form-control" id = "dl16" name = "dl16" placeholder = "Nombre del jefe inmediato" required>                    
                  </div>
                  <!-- Direccion empresa  -->  
                  <div class="form-group col-xs-6">
                    <label>Puesto del Jefe inmediato</label>
                    <input type = "text" class = "form-control" id = "dl17" name = "dl17" placeholder = "Puesto del Jefe inmediato" required>                    
                  </div>
                </div>  

                <div class="row">
                  <!-- Fecha de inicio  -->  
                  <div class="form-group col-xs-6">
                    <label>Fecha inicio</label>
                    <input type = "text" class = "form-control" id = "dl18" name = "dl18" placeholder = "Fecha de inicio de labores" required>                    
                  </div>
                  <!-- Fecha de salida  -->  
                  <div class="form-group col-xs-6">
                    <label>Fecha de Salida</label>
                    <input type = "text" class = "form-control" id = "dl19" name = "dl19" placeholder = "Fecha de salida de la empresa" required>                    
                  </div>
                </div>

                <div class="row">
                  <!-- Ultimo Salario  -->  
                  <div class="form-group col-xs-6">
                    <label>Ultimo salario</label>
                    <input type = "number" class = "form-control" id = "dl20" name = "dl20" placeholder = "Ultimo salario" required>                    
                  </div>
                  <!-- Motivo de retiro  -->  
                  <div class="form-group col-xs-6">
                    <label>Motivo de retiro</label>
                    <textarea  class="form-control" id="dl21" name="dl21" placeholder="Motivo de terio" rows="3" required></textarea>
                  </div>                  
                </div>

                <div class="row">
                  <!--Telefono casa -->
                  <div class="form-group col-xs-12"
                    <label>Referencia objtenida Empresa</label>  
                    <textarea  class="form-control" id="dl22" name="dl22" placeholder="Referencia obtenida por parte de la empresa" rows="3" required></textarea>                                      
                  </div>
                </div>

              </div>
            </div> 

            <div class="row lab2" style="display: none">
              <div class="col-sm-10 col-sm-offset-1">
                <div class="row">
                  <!-- Empresa  -->  
                  <div class="form-group col-xs-6">
                    <label>Empresa</label>
                    <input type = "text" class = "form-control" id = "dl23" name = "dl23" placeholder = "Nombre de la empresa" required>                    
                  </div>
                  <!-- Direccion empresa  -->  
                  <div class="form-group col-xs-6">
                    <label>Direccion</label>
                    <input type = "text" class = "form-control" id = "dl24" name = "dl24" placeholder = "Direccion de la empresa" required>                    
                  </div>
                </div>

                <div class="row">
                  <!-- Telefono  -->  
                  <div class="form-group col-xs-6">
                    <label>Telefono</label>
                    <input type = "number" class = "form-control" id = "dl25" name = "dl25" placeholder = "Numero telefonico de la empresa" required>                    
                  </div>
                  <!-- Cargo empresa  -->  
                  <div class="form-group col-xs-6">
                    <label>Puesto</label>
                    <input type = "text" class = "form-control" id = "dl26" name = "dl26" placeholder = "Puesto que desempeño" required>                    
                  </div>
                </div>

                <div class="row">
                  <!-- Jefe Inmediato  -->  
                  <div class="form-group col-xs-6">
                    <label>Jefe Inmediato</label>
                    <input type = "text" class = "form-control" id = "dl27" name = "dl27" placeholder = "Nombre del jefe inmediato" required>                    
                  </div>
                  <!-- Direccion empresa  -->  
                  <div class="form-group col-xs-6">
                    <label>Puesto del Jefe inmediato</label>
                    <input type = "text" class = "form-control" id = "dl28" name = "dl28" placeholder = "Puesto del Jefe inmediato" required>                    
                  </div>
                </div>  

                <div class="row">
                  <!-- Fecha de inicio  -->  
                  <div class="form-group col-xs-6">
                    <label>Fecha inicio</label>
                    <input type = "text" class = "form-control" id = "dl29" name = "dl29" placeholder = "Fecha de inicio de labores" required>                    
                  </div>
                  <!-- Fecha de salida  -->  
                  <div class="form-group col-xs-6">
                    <label>Fecha de Salida</label>
                    <input type = "text" class = "form-control" id = "dl30" name = "dl30" placeholder = "Fecha de salida de la empresa" required>                    
                  </div>
                </div>

                <div class="row">
                  <!-- Ultimo Salario  -->  
                  <div class="form-group col-xs-6">
                    <label>Ultimo salario</label>
                    <input type = "number" class = "form-control" id = "dl31" name = "dl31" placeholder = "Ultimo salario" required>                    
                  </div>
                  <!-- Motivo de retiro  -->  
                  <div class="form-group col-xs-6">
                    <label>Motivo de retiro</label>
                    <textarea  class="form-control" id="dl32" name="dl32" placeholder="Motivo de terio" rows="3" required></textarea>
                  </div>                  
                </div>

                <div class="row">
                  <!--Telefono casa -->
                  <div class="form-group col-xs-12"
                    <label>Referencia objtenida Empresa</label>  
                    <textarea  class="form-control" id="dl33" name="dl33" placeholder="Referencia obtenida por parte de la empresa" rows="3" required></textarea>                                      
                  </div>
                </div>

              </div>
            </div> 

            <div class="row lab3" style="display: none">
              <div class="col-sm-10 col-sm-offset-1">
                <div class="row">
                  <!-- Empresa  -->  
                  <div class="form-group col-xs-6">
                    <label>Empresa</label>
                    <input type = "text" class = "form-control" id = "dl34" name = "dl34" placeholder = "Nombre de la empresa" required>                    
                  </div>
                  <!-- Direccion empresa  -->  
                  <div class="form-group col-xs-6">
                    <label>Direccion</label>
                    <input type = "text" class = "form-control" id = "dl35" name = "dl35" placeholder = "Direccion de la empresa" required>                    
                  </div>
                </div>

                <div class="row">
                  <!-- Telefono  -->  
                  <div class="form-group col-xs-6">
                    <label>Telefono</label>
                    <input type = "number" class = "form-control" id = "dl36" name = "dl36" placeholder = "Numero telefonico de la empresa" required>                    
                  </div>
                  <!-- Cargo empresa  -->  
                  <div class="form-group col-xs-6">
                    <label>Puesto</label>
                    <input type = "text" class = "form-control" id = "dl37" name = "dl37" placeholder = "Puesto que desempeño" required>                    
                  </div>
                </div>

                <div class="row">
                  <!-- Jefe Inmediato  -->  
                  <div class="form-group col-xs-6">
                    <label>Jefe Inmediato</label>
                    <input type = "text" class = "form-control" id = "dl38" name = "dl38" placeholder = "Nombre del jefe inmediato" required>                    
                  </div>
                  <!-- Direccion empresa  -->  
                  <div class="form-group col-xs-6">
                    <label>Puesto del Jefe inmediato</label>
                    <input type = "text" class = "form-control" id = "dl39" name = "dl39" placeholder = "Puesto del Jefe inmediato" required>                    
                  </div>
                </div>  

                <div class="row">
                  <!-- Fecha de inicio  -->  
                  <div class="form-group col-xs-6">
                    <label>Fecha inicio</label>
                    <input type = "text" class = "form-control" id = "dl40" name = "dl40" placeholder = "Fecha de inicio de labores" required>                    
                  </div>
                  <!-- Fecha de salida  -->  
                  <div class="form-group col-xs-6">
                    <label>Fecha de Salida</label>
                    <input type = "text" class = "form-control" id = "dl41" name = "dl41" placeholder = "Fecha de salida de la empresa" required>                    
                  </div>
                </div>

                <div class="row">
                  <!-- Ultimo Salario  -->  
                  <div class="form-group col-xs-6">
                    <label>Ultimo salario</label>
                    <input type = "number" class = "form-control" id = "dl42" name = "dl42" placeholder = "Ultimo salario" required>                    
                  </div>
                  <!-- Motivo de retiro  -->  
                  <div class="form-group col-xs-6">
                    <label>Motivo de retiro</label>
                    <textarea  class="form-control" id="dl43" name="dl43" placeholder="Motivo de terio" rows="3" required></textarea>
                  </div>                  
                </div>

                <div class="row">
                  <!--Telefono casa -->
                  <div class="form-group col-xs-12"
                    <label>Referencia objtenida Empresa</label>  
                    <textarea  class="form-control" id="dl44" name="dl44" placeholder="Referencia obtenida por parte de la empresa" rows="3" required></textarea>                                      
                  </div>
                </div>

              </div>
            </div> 

            <div class="row lab4" style="display: none">
              <div class="col-sm-10 col-sm-offset-1">
                <div class="row">
                  <!-- Empresa  -->  
                  <div class="form-group col-xs-6">
                    <label>Empresa</label>
                    <input type = "text" class = "form-control" id = "dl45" name = "dl45" placeholder = "Nombre de la empresa" required>                    
                  </div>
                  <!-- Direccion empresa  -->  
                  <div class="form-group col-xs-6">
                    <label>Direccion</label>
                    <input type = "text" class = "form-control" id = "dl46" name = "dl46" placeholder = "Direccion de la empresa" required>                    
                  </div>
                </div>

                <div class="row">
                  <!-- Telefono  -->  
                  <div class="form-group col-xs-6">
                    <label>Telefono</label>
                    <input type = "number" class = "form-control" id = "dl47" name = "dl47" placeholder = "Numero telefonico de la empresa" required>                    
                  </div>
                  <!-- Cargo empresa  -->  
                  <div class="form-group col-xs-6">
                    <label>Puesto</label>
                    <input type = "text" class = "form-control" id = "dl48" name = "dl48" placeholder = "Puesto que desempeño" required>                    
                  </div>
                </div>

                <div class="row">
                  <!-- Jefe Inmediato  -->  
                  <div class="form-group col-xs-6">
                    <label>Jefe Inmediato</label>
                    <input type = "text" class = "form-control" id = "dl49" name = "dl49" placeholder = "Nombre del jefe inmediato" required>                    
                  </div>
                  <!-- Direccion empresa  -->  
                  <div class="form-group col-xs-6">
                    <label>Puesto del Jefe inmediato</label>
                    <input type = "text" class = "form-control" id = "dl50" name = "dl50" placeholder = "Puesto del Jefe inmediato" required>                    
                  </div>
                </div>  

                <div class="row">
                  <!-- Fecha de inicio  -->  
                  <div class="form-group col-xs-6">
                    <label>Fecha inicio</label>
                    <input type = "text" class = "form-control" id = "dl51" name = "dl51" placeholder = "Fecha de inicio de labores" required>                    
                  </div>
                  <!-- Fecha de salida  -->  
                  <div class="form-group col-xs-6">
                    <label>Fecha de Salida</label>
                    <input type = "text" class = "form-control" id = "dl52" name = "dl52" placeholder = "Fecha de salida de la empresa" required>                    
                  </div>
                </div>

                <div class="row">
                  <!-- Ultimo Salario  -->  
                  <div class="form-group col-xs-6">
                    <label>Ultimo salario</label>
                    <input type = "number" class = "form-control" id = "dl53" name = "dl53" placeholder = "Ultimo salario" required>                    
                  </div>
                  <!-- Motivo de retiro  -->  
                  <div class="form-group col-xs-6">
                    <label>Motivo de retiro</label>
                    <textarea  class="form-control" id="dl54" name="dl54" placeholder="Motivo de terio" rows="3" required></textarea>
                  </div>                  
                </div>

                <div class="row">
                  <!--Telefono casa -->
                  <div class="form-group col-xs-12"
                    <label>Referencia objtenida Empresa</label>  
                    <textarea  class="form-control" id="dl55" name="dl55" placeholder="Referencia obtenida por parte de la empresa" rows="3" required></textarea>                                      
                  </div>
                </div>

              </div>
            </div> 

            <div class="row lab5" style="display: none">
              <div class="col-sm-10 col-sm-offset-1">
                <div class="row">
                  <!-- Empresa  -->  
                  <div class="form-group col-xs-6">
                    <label>Empresa</label>
                    <input type = "text" class = "form-control" id = "dl56" name = "dl56" placeholder = "Nombre de la empresa" required>                    
                  </div>
                  <!-- Direccion empresa  -->  
                  <div class="form-group col-xs-6">
                    <label>Direccion</label>
                    <input type = "text" class = "form-control" id = "dl57" name = "dl57" placeholder = "Direccion de la empresa" required>                    
                  </div>
                </div>

                <div class="row">
                  <!-- Telefono  -->  
                  <div class="form-group col-xs-6">
                    <label>Telefono</label>
                    <input type = "number" class = "form-control" id = "dl58" name = "dl58" placeholder = "Numero telefonico de la empresa" required>                    
                  </div>
                  <!-- Cargo empresa  -->  
                  <div class="form-group col-xs-6">
                    <label>Puesto</label>
                    <input type = "text" class = "form-control" id = "dl59" name = "dl59" placeholder = "Puesto que desempeño" required>                    
                  </div>
                </div>

                <div class="row">
                  <!-- Jefe Inmediato  -->  
                  <div class="form-group col-xs-6">
                    <label>Jefe Inmediato</label>
                    <input type = "text" class = "form-control" id = "dl60" name = "dl60" placeholder = "Nombre del jefe inmediato" required>                    
                  </div>
                  <!-- Direccion empresa  -->  
                  <div class="form-group col-xs-6">
                    <label>Puesto del Jefe inmediato</label>
                    <input type = "text" class = "form-control" id = "dl61" name = "dl61" placeholder = "Puesto del Jefe inmediato" required>                    
                  </div>
                </div>  

                <div class="row">
                  <!-- Fecha de inicio  -->  
                  <div class="form-group col-xs-6">
                    <label>Fecha inicio</label>
                    <input type = "text" class = "form-control" id = "dl62" name = "dl62" placeholder = "Fecha de inicio de labores" required>                    
                  </div>
                  <!-- Fecha de salida  -->  
                  <div class="form-group col-xs-6">
                    <label>Fecha de Salida</label>
                    <input type = "text" class = "form-control" id = "dl63" name = "dl63" placeholder = "Fecha de salida de la empresa" required>                    
                  </div>
                </div>

                <div class="row">
                  <!-- Ultimo Salario  -->  
                  <div class="form-group col-xs-6">
                    <label>Ultimo salario</label>
                    <input type = "number" class = "form-control" id = "dl64" name = "dl64" placeholder = "Ultimo salario" required>                    
                  </div>
                  <!-- Motivo de retiro  -->  
                  <div class="form-group col-xs-6">
                    <label>Motivo de retiro</label>
                    <textarea  class="form-control" id="dl65" name="dl65" placeholder="Motivo de terio" rows="3" required></textarea>
                  </div>                  
                </div>

                <div class="row">
                  <!--Telefono casa -->
                  <div class="form-group col-xs-12"
                    <label>Referencia objtenida Empresa</label>  
                    <textarea  class="form-control" id="dl66" name="dl66" placeholder="Referencia obtenida por parte de la empresa" rows="3" required></textarea>                                      
                  </div>
                </div>

              </div>
            </div> 

            <div class="row lab6" style="display: none">
              <div class="col-sm-10 col-sm-offset-1">
                <div class="row">
                  <!-- Empresa  -->  
                  <div class="form-group col-xs-6">
                    <label>Empresa</label>
                    <input type = "text" class = "form-control" id = "dl67" name = "dl67" placeholder = "Nombre de la empresa" required>                    
                  </div>
                  <!-- Direccion empresa  -->  
                  <div class="form-group col-xs-6">
                    <label>Direccion</label>
                    <input type = "text" class = "form-control" id = "dl68" name = "dl68" placeholder = "Direccion de la empresa" required>                    
                  </div>
                </div>

                <div class="row">
                  <!-- Telefono  -->  
                  <div class="form-group col-xs-6">
                    <label>Telefono</label>
                    <input type = "number" class = "form-control" id = "dl69" name = "dl69" placeholder = "Numero telefonico de la empresa" required>                    
                  </div>
                  <!-- Cargo empresa  -->  
                  <div class="form-group col-xs-6">
                    <label>Puesto</label>
                    <input type = "text" class = "form-control" id = "dl70" name = "dl70" placeholder = "Puesto que desempeño" required>                    
                  </div>
                </div>

                <div class="row">
                  <!-- Jefe Inmediato  -->  
                  <div class="form-group col-xs-6">
                    <label>Jefe Inmediato</label>
                    <input type = "text" class = "form-control" id = "dl71" name = "dl71" placeholder = "Nombre del jefe inmediato" required>                    
                  </div>
                  <!-- Direccion empresa  -->  
                  <div class="form-group col-xs-6">
                    <label>Puesto del Jefe inmediato</label>
                    <input type = "text" class = "form-control" id = "dl72" name = "dl72" placeholder = "Puesto del Jefe inmediato" required>                    
                  </div>
                </div>  

                <div class="row">
                  <!-- Fecha de inicio  -->  
                  <div class="form-group col-xs-6">
                    <label>Fecha inicio</label>
                    <input type = "text" class = "form-control" id = "dl73" name = "dl73" placeholder = "Fecha de inicio de labores" required>                    
                  </div>
                  <!-- Fecha de salida  -->  
                  <div class="form-group col-xs-6">
                    <label>Fecha de Salida</label>
                    <input type = "text" class = "form-control" id = "dl74" name = "dl74" placeholder = "Fecha de salida de la empresa" required>                    
                  </div>
                </div>

                <div class="row">
                  <!-- Ultimo Salario  -->  
                  <div class="form-group col-xs-6">
                    <label>Ultimo salario</label>
                    <input type = "number" class = "form-control" id = "dl75" name = "dl75" placeholder = "Ultimo salario" required>                    
                  </div>
                  <!-- Motivo de retiro  -->  
                  <div class="form-group col-xs-6">
                    <label>Motivo de retiro</label>
                    <textarea  class="form-control" id="dl76" name="dl76" placeholder="Motivo de terio" rows="3" required></textarea>
                  </div>                  
                </div>

                <div class="row">
                  <!--Telefono casa -->
                  <div class="form-group col-xs-12"
                    <label>Referencia objtenida Empresa</label>  
                    <textarea  class="form-control" id="dl77" name="dl77" placeholder="Referencia obtenida por parte de la empresa" rows="3" required></textarea>                                      
                  </div>
                </div>

              </div>
            </div> 

            <div class="row lab7" style="display: none">
              <div class="col-sm-10 col-sm-offset-1">
                <div class="row">
                  <!-- Empresa  -->  
                  <div class="form-group col-xs-6">
                    <label>Empresa</label>
                    <input type = "text" class = "form-control" id = "dl78" name = "dl78" placeholder = "Nombre de la empresa" required>                    
                  </div>
                  <!-- Direccion empresa  -->  
                  <div class="form-group col-xs-6">
                    <label>Direccion</label>
                    <input type = "text" class = "form-control" id = "dl79" name = "dl79" placeholder = "Direccion de la empresa" required>                    
                  </div>
                </div>

                <div class="row">
                  <!-- Telefono  -->  
                  <div class="form-group col-xs-6">
                    <label>Telefono</label>
                    <input type = "number" class = "form-control" id = "dl80" name = "dl80" placeholder = "Numero telefonico de la empresa" required>                    
                  </div>
                  <!-- Cargo empresa  -->  
                  <div class="form-group col-xs-6">
                    <label>Puesto</label>
                    <input type = "text" class = "form-control" id = "dl81" name = "dl81" placeholder = "Puesto que desempeño" required>                    
                  </div>
                </div>

                <div class="row">
                  <!-- Jefe Inmediato  -->  
                  <div class="form-group col-xs-6">
                    <label>Jefe Inmediato</label>
                    <input type = "text" class = "form-control" id = "dl82" name = "dl82" placeholder = "Nombre del jefe inmediato" required>                    
                  </div>
                  <!-- Direccion empresa  -->  
                  <div class="form-group col-xs-6">
                    <label>Puesto del Jefe inmediato</label>
                    <input type = "text" class = "form-control" id = "dl83" name = "dl83" placeholder = "Puesto del Jefe inmediato" required>                    
                  </div>
                </div>  

                <div class="row">
                  <!-- Fecha de inicio  -->  
                  <div class="form-group col-xs-6">
                    <label>Fecha inicio</label>
                    <input type = "text" class = "form-control" id = "dl84" name = "dl84" placeholder = "Fecha de inicio de labores" required>                    
                  </div>
                  <!-- Fecha de salida  -->  
                  <div class="form-group col-xs-6">
                    <label>Fecha de Salida</label>
                    <input type = "text" class = "form-control" id = "dl85" name = "dl85" placeholder = "Fecha de salida de la empresa" required>                    
                  </div>
                </div>

                <div class="row">
                  <!-- Ultimo Salario  -->  
                  <div class="form-group col-xs-6">
                    <label>Ultimo salario</label>
                    <input type = "number" class = "form-control" id = "dl86" name = "dl86" placeholder = "Ultimo salario" required>                    
                  </div>
                  <!-- Motivo de retiro  -->  
                  <div class="form-group col-xs-6">
                    <label>Motivo de retiro</label>
                    <textarea  class="form-control" id="dl87" name="dl87" placeholder="Motivo de terio" rows="3" required></textarea>
                  </div>                  
                </div>

                <div class="row">
                  <!--Telefono casa -->
                  <div class="form-group col-xs-12"
                    <label>Referencia objtenida Empresa</label>  
                    <textarea  class="form-control" id="dl88" name="dl88" placeholder="Referencia obtenida por parte de la empresa" rows="3" required></textarea>                                      
                  </div>
                </div>

              </div>
            </div> 

            <div class="row lab8" style="display: none">
              <div class="col-sm-10 col-sm-offset-1">
                <div class="row">
                  <!-- Empresa  -->  
                  <div class="form-group col-xs-6">
                    <label>Empresa</label>
                    <input type = "text" class = "form-control" id = "dl89" name = "dl89" placeholder = "Nombre de la empresa" required>                    
                  </div>
                  <!-- Direccion empresa  -->  
                  <div class="form-group col-xs-6">
                    <label>Direccion</label>
                    <input type = "text" class = "form-control" id = "dl90" name = "dl90" placeholder = "Direccion de la empresa" required>                    
                  </div>
                </div>

                <div class="row">
                  <!-- Telefono  -->  
                  <div class="form-group col-xs-6">
                    <label>Telefono</label>
                    <input type = "number" class = "form-control" id = "dl91" name = "dl91" placeholder = "Numero telefonico de la empresa" required>                    
                  </div>
                  <!-- Cargo empresa  -->  
                  <div class="form-group col-xs-6">
                    <label>Puesto</label>
                    <input type = "text" class = "form-control" id = "dl92" name = "dl92" placeholder = "Puesto que desempeño" required>                    
                  </div>
                </div>

                <div class="row">
                  <!-- Jefe Inmediato  -->  
                  <div class="form-group col-xs-6">
                    <label>Jefe Inmediato</label>
                    <input type = "text" class = "form-control" id = "dl93" name = "dl93" placeholder = "Nombre del jefe inmediato" required>                    
                  </div>
                  <!-- Direccion empresa  -->  
                  <div class="form-group col-xs-6">
                    <label>Puesto del Jefe inmediato</label>
                    <input type = "text" class = "form-control" id = "dl94" name = "dl94" placeholder = "Puesto del Jefe inmediato" required>                    
                  </div>
                </div>  

                <div class="row">
                  <!-- Fecha de inicio  -->  
                  <div class="form-group col-xs-6">
                    <label>Fecha inicio</label>
                    <input type = "text" class = "form-control" id = "dl95" name = "dl95" placeholder = "Fecha de inicio de labores" required>                    
                  </div>
                  <!-- Fecha de salida  -->  
                  <div class="form-group col-xs-6">
                    <label>Fecha de Salida</label>
                    <input type = "text" class = "form-control" id = "dl96" name = "dl96" placeholder = "Fecha de salida de la empresa" required>                    
                  </div>
                </div>

                <div class="row">
                  <!-- Ultimo Salario  -->  
                  <div class="form-group col-xs-6">
                    <label>Ultimo salario</label>
                    <input type = "number" class = "form-control" id = "dl97" name = "dl97" placeholder = "Ultimo salario" required>                    
                  </div>
                  <!-- Motivo de retiro  -->  
                  <div class="form-group col-xs-6">
                    <label>Motivo de retiro</label>
                    <textarea  class="form-control" id="dl98" name="dl98" placeholder="Motivo de terio" rows="3" required></textarea>
                  </div>                  
                </div>

                <div class="row">
                  <!--Telefono casa -->
                  <div class="form-group col-xs-12"
                    <label>Referencia objtenida Empresa</label>  
                    <textarea  class="form-control" id="dl99" name="dl99" placeholder="Referencia obtenida por parte de la empresa" rows="3" required></textarea>                                      
                  </div>
                </div>

              </div>
            </div> 

            <div class="row lab9" style="display: none">
              <div class="col-sm-10 col-sm-offset-1">
                <div class="row">
                  <!-- Empresa  -->  
                  <div class="form-group col-xs-6">
                    <label>Empresa</label>
                    <input type = "text" class = "form-control" id = "dl100" name = "dl100" placeholder = "Nombre de la empresa" required>                    
                  </div>
                  <!-- Direccion empresa  -->  
                  <div class="form-group col-xs-6">
                    <label>Direccion</label>
                    <input type = "text" class = "form-control" id = "dl101" name = "dl101" placeholder = "Direccion de la empresa" required>                    
                  </div>
                </div>

                <div class="row">
                  <!-- Telefono  -->  
                  <div class="form-group col-xs-6">
                    <label>Telefono</label>
                    <input type = "number" class = "form-control" id = "dl102" name = "dl102" placeholder = "Numero telefonico de la empresa" required>                    
                  </div>
                  <!-- Cargo empresa  -->  
                  <div class="form-group col-xs-6">
                    <label>Puesto</label>
                    <input type = "text" class = "form-control" id = "dl103" name = "dl103" placeholder = "Puesto que desempeño" required>                    
                  </div>
                </div>

                <div class="row">
                  <!-- Jefe Inmediato  -->  
                  <div class="form-group col-xs-6">
                    <label>Jefe Inmediato</label>
                    <input type = "text" class = "form-control" id = "dl104" name = "dl104" placeholder = "Nombre del jefe inmediato" required>                    
                  </div>
                  <!-- Direccion empresa  -->  
                  <div class="form-group col-xs-6">
                    <label>Puesto del Jefe inmediato</label>
                    <input type = "text" class = "form-control" id = "dl105" name = "dl105" placeholder = "Puesto del Jefe inmediato" required>                    
                  </div>
                </div>  

                <div class="row">
                  <!-- Fecha de inicio  -->  
                  <div class="form-group col-xs-6">
                    <label>Fecha inicio</label>
                    <input type = "text" class = "form-control" id = "dl106" name = "dl106" placeholder = "Fecha de inicio de labores" required>                    
                  </div>
                  <!-- Fecha de salida  -->  
                  <div class="form-group col-xs-6">
                    <label>Fecha de Salida</label>
                    <input type = "text" class = "form-control" id = "dl107" name = "dl107" placeholder = "Fecha de salida de la empresa" required>                    
                  </div>
                </div>

                <div class="row">
                  <!-- Ultimo Salario  -->  
                  <div class="form-group col-xs-6">
                    <label>Ultimo salario</label>
                    <input type = "number" class = "form-control" id = "dl108" name = "dl108" placeholder = "Ultimo salario" required>                    
                  </div>
                  <!-- Motivo de retiro  -->  
                  <div class="form-group col-xs-6">
                    <label>Motivo de retiro</label>
                    <textarea  class="form-control" id="dl109" name="dl109" placeholder="Motivo de terio" rows="3" required></textarea>
                  </div>                  
                </div>

                <div class="row">
                  <!--Telefono casa -->
                  <div class="form-group col-xs-12"
                    <label>Referencia objtenida Empresa</label>  
                    <textarea  class="form-control" id="dl110" name="dl110" placeholder="Referencia obtenida por parte de la empresa" rows="3" required></textarea>                                      
                  </div>
                </div>

              </div>
            </div> 

            <div class="row lab10" style="display: none">
              <div class="col-sm-10 col-sm-offset-1">
                <div class="row">
                  <!-- Empresa  -->  
                  <div class="form-group col-xs-6">
                    <label>Empresa</label>
                    <input type = "text" class = "form-control" id = "dl111" name = "dl111" placeholder = "Nombre de la empresa" required>                    
                  </div>
                  <!-- Direccion empresa  -->  
                  <div class="form-group col-xs-6">
                    <label>Direccion</label>
                    <input type = "text" class = "form-control" id = "dl112" name = "dl112" placeholder = "Direccion de la empresa" required>                    
                  </div>
                </div>

                <div class="row">
                  <!-- Telefono  -->  
                  <div class="form-group col-xs-6">
                    <label>Telefono</label>
                    <input type = "number" class = "form-control" id = "dl113" name = "dl113" placeholder = "Numero telefonico de la empresa" required>                    
                  </div>
                  <!-- Cargo empresa  -->  
                  <div class="form-group col-xs-6">
                    <label>Puesto</label>
                    <input type = "text" class = "form-control" id = "dl114" name = "dl114" placeholder = "Puesto que desempeño" required>                    
                  </div>
                </div>

                <div class="row">
                  <!-- Jefe Inmediato  -->  
                  <div class="form-group col-xs-6">
                    <label>Jefe Inmediato</label>
                    <input type = "text" class = "form-control" id = "dl115" name = "dl115" placeholder = "Nombre del jefe inmediato" required>                    
                  </div>
                  <!-- Direccion empresa  -->  
                  <div class="form-group col-xs-6">
                    <label>Puesto del Jefe inmediato</label>
                    <input type = "text" class = "form-control" id = "dl116" name = "dl116" placeholder = "Puesto del Jefe inmediato" required>                    
                  </div>
                </div>  

                <div class="row">
                  <!-- Fecha de inicio  -->  
                  <div class="form-group col-xs-6">
                    <label>Fecha inicio</label>
                    <input type = "text" class = "form-control" id = "dl117" name = "dl117" placeholder = "Fecha de inicio de labores" required>                    
                  </div>
                  <!-- Fecha de salida  -->  
                  <div class="form-group col-xs-6">
                    <label>Fecha de Salida</label>
                    <input type = "text" class = "form-control" id = "dl118" name = "dl118" placeholder = "Fecha de salida de la empresa" required>                    
                  </div>
                </div>

                <div class="row">
                  <!-- Ultimo Salario  -->  
                  <div class="form-group col-xs-6">
                    <label>Ultimo salario</label>
                    <input type = "number" class = "form-control" id = "dl119" name = "dl119" placeholder = "Ultimo salario" required>                    
                  </div>
                  <!-- Motivo de retiro  -->  
                  <div class="form-group col-xs-6">
                    <label>Motivo de retiro</label>
                    <textarea  class="form-control" id="dl120" name="dl120" placeholder="Motivo de terio" rows="3" required></textarea>
                  </div>                  
                </div>

                <div class="row">
                  <!--Telefono casa -->
                  <div class="form-group col-xs-12"
                    <label>Referencia objtenida Empresa</label>  
                    <textarea  class="form-control" id="dl121" name="dl121" placeholder="Referencia obtenida por parte de la empresa" rows="3" required></textarea>                                      
                  </div>
                </div>

              </div>
            </div> 
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
                          <option>Cerramico</option>
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
                          <tr>
                          <th><label>¿Tiene algun tatuaje?</label></th>
                          <th>
                            <select class="form-control col-xs-6" name="sa9" >
                              <option>Si</option>
                              <option>No</option>
                            </select>                            
                          </th>
                          <th>
                            <input type = "text" value="" class = "form-control" name="sa10">
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
                     <div class="row">
                        <div class="form-group col-xs-12">
                          <label>{{ $description }}</label>
                          <input type = "text" class = "form-control" name = "v{{ $key + 1}}" placeholder = "{{ $description }}" required>                    
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

  var conteo2 = 1;
  $("#addLab").click(function(e){
    $(".lab" + conteo2).css("display","block");    
    conteo2++;
  });

  $('[name = "finish"]').click(function(){
    var data = $('[name = "form-wizar"]').serialize();
  
      $.ajax({
      type: 'POST',
      url: 'ballots',
      data: data,
      success: function(data) {
          console.info(data);
     
        }
      })


  });





</script>


{!! Html::script('app/helpers/crud_operate.js') !!}
{!! Html::script('app/admin/generate.js') !!}


{!! Html::script('wizar/js/jquery.bootstrap.wizard.js') !!}
{!! Html::script('wizar/js/wizard.js') !!}


@stop