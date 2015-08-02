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
      <form action="" method="">
        <div class="card wizard-card ct-wizard-orange" id="wizard">
          <ul>
            <li><a href="#about" data-toggle="tab">Datos Personales</a></li>
            <li><a href="#account" data-toggle="tab">Datos Familiares</a></li>
            <li><a href="#address" data-toggle="tab">Datos Educativos</a></li>
            <li><a href="#laboral" data-toggle="tab">Datos Laborales</a></li>
            <li><a href="#presupuesto" data-toggle="tab">Datos Prosupuesto</a></li>
          </ul>

        <div class="tab-content">
          <!-- Datos Personales-->
          <div class="tab-pane" id="about">
            <div class="row">
              <div class="col-sm-10 col-sm-offset-1">
                <div class="row">
                  <!-- Nombres --> 
                  <div class="form-group col-xs-6">
                    <label>Nombre</label>                    
                    <input type="text" class="form-control" id="dt1" name="dt1" placeholder="Nombres" required>
                  </div>
                  <!-- pellidos -->
                  <div class="form-group col-xs-6">
                    <label>Apellido</label>                    
                    <input type="text" class="form-control" id="dt2" name="dt2" placeholder="Apellidos" required>
                  </div>
                </div>
                <div class="row">
                  <!--Telefono casa -->
                  <div class="form-group col-xs-6">
                    <label>Telefono de Casa</label>                    
                    <input type = "number" class = "form-control" id = "dt3" name = "dt3" placeholder = "Teléfono de Casa" required>
                  </div>
                  <!-- Celular -->
                  <div class="form-group col-xs-6">
                    <label>Celular</label>
                    <input type = "number" class = "form-control" id = "dt4" name = "dt4" placeholder = "Teléfono Celular" required>
                  </div>
                </div>
                <div class="row">
                  <!--Profesion -->  
                  <div class="form-group col-xs-6">
                    <label>Edad</label>
                    <input type = "number" class = "form-control" id = "dt5" name = "dt5" placeholder = "Edad" required>                    
                  </div>
                  <!--Profesion -->  
                  <div class="form-group col-xs-6">
                    <label>Profesion</label>
                    <input type = "text" class = "form-control" id = "dt6" name = "dt6" placeholder = "Profesion" required>                      
                  </div>
                </div>
                <div class="row">
                  <!--Estado Civil -->
                  <div class="form-group col-xs-6">
                    <label>Estado Civil</label>
                    <select class="form-control col-xs-6" id = "dt7" name = "dt7">
                      <option>Casado</option>
                      <option>Soltero</option>
                      <option>Divorciado</option>
                      <option>Viudo</option>                                                  
                    </select>
                  </div> 
                  <!-- DPI -->
                  <div class="form-group col-xs-6">
                    <label>DPI</label>                    
                    <input type = "number" class = "form-control" id = "dt8" name = "dt8" placeholder = "DPI" required>    
                  </div>
                </div>
                <div class="row">
                  <!--Profesion -->  
                  <div class="form-group col-xs-6">
                    <label>Nit</label>
                    <input type = "number" class = "form-control" id = "dt9" name = "dt9" placeholder = "Nit" required>                    
                  </div>                  
                  <!--Profesion -->  
                  <div class="form-group col-xs-6">
                    <label>No de Licencia</label>
                    <input type = "number" class = "form-control" id = "dt10" name = "dt10" placeholder = "No de licencia" required>
                  </div>
                </div>
                <div class="row">
                  <!--Profesion -->  
                  <div class="form-group col-xs-6">
                    <label>Religion</label>
                    <input type = "text" class = "form-control" id = "dt11" name = "dt11" placeholder = "Religion" required>                    
                  </div>
                  <!--Profesion -->  
                  <div class="form-group col-xs-6">
                    <label>Tipo de sangre</label>
                    <input type = "text" class = "form-control" id = "dt12" name = "dt12" placeholder = "Tipo de sangre" required>                    
                  </div>
                </div>
                <div class="row">
                  <!-- Direccion de la persona -->
                  <div class="col-sm-12">
                    <div class="form-group">
                      <label>Direccion completa</label>                  
                      <input type = "text" class = "form-control" id = "dt13" name = "dt13" placeholder = "Direccion completa" required>                                    
                    </div>
                  </div>
                </div>
                <div class="col-sm-12">
                  <div class="picture-container">
                    <div class="picture">
                      <img src="wizar/imagenes/default-avatar.png" class="picture-src" id="wizardPicturePreview" title=""/>
                      <input type="file" id="wizard-picture dt14" name >
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
                  <!-- Nombres del esposo --> 
                  <div class="form-group col-xs-6">
                    <label>Nombre completo</label>                    
                    <input type="text" class="form-control" id="df28" name="df28" placeholder="Nombres" required>
                  </div>
                  <!-- Edad -->
                  <div class="form-group col-xs-6">
                    <label>Edad</label>                    
                    <input type="number" class="form-control" id="df29" name="df29" placeholder="Edad" required>
                  </div>
                </div>
                <div class="row">                  
                  <!-- A que se dedica -->
                  <div class="form-group col-xs-6">
                    <label>A que se dedica</label>                    
                    <input type="text" class="form-control" id="df30" name="df30" placeholder="A que se dedica" required>
                  </div>
                  <!-- Numero telefonico -->
                  <div class="form-group col-xs-6">
                    <label>Numero Telefonico</label>                    
                    <input type="number" class="form-control" id="df30" name="df30" placeholder="Numero telefonico" required>
                  </div>
                </div>
                <!-- Informacion Hijos -->
                <p class="bg-primary info-text">Informacion sobre Hijos</p>
                <div class="row">
                  <!-- Numero de Hijos -->
                  <div class="col-sm-12">
                    <div class="form-group">
                      <label>Numero de hijos</label>                  
                      <input type = "number" class = "form-control" id = "df31" name = "df31" placeholder = "Numero de hijos" required>                                    
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
                    <input type = "text" class = "form-control" id = "dl7" name = "dl9" placeholder = "Fecha de inicio de labores" required>                    
                  </div>
                  <!-- Fecha de salida  -->  
                  <div class="form-group col-xs-6">
                    <label>Fecha de Salida</label>
                    <input type = "text" class = "form-control" id = "dl8" name = "dl9" placeholder = "Fecha de salida de la empresa" required>                    
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
          </div>


          <div class="tab-pane" id="presupuesto">
            <div class="row">
              <div class="col-sm-10 col-sm-offset-1">
                <div class="row">
                  <table class="table table-hover">                   
                    <thead>                      
                      <tr>
                        <th scope="col">Descripcion</th>                       
                        <th scope="col">Ingresos</th>   
                        <th scope="col">Egresos</th>
                        <th scope="col">Diferencia</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr class="info">
                        <th>Gastos de recreacion</th>
                        <th>
                          <input type = "number" value="10">
                        </th>
                        <th>
                          <input type = "number" value="10">
                        </th>
                        <th>
                          <input type = "number" value="10">
                        </th>                        
                      </tr>
                                            <tr>
                        <th>Gastos de recreacion</th>
                        <th>
                          <input type = "number" value="10">
                        </th>
                        <th>
                          <input type = "number" value="10">
                        </th>
                        <th>
                          <input type = "number" value="10">
                        </th>                        
                      </tr>
                      <tr class="info">
                        <th>Gastos de recreacion</th>
                        <th>
                          <input type = "number" value="10">
                        </th>
                        <th>
                          <input type = "number" value="10">
                        </th>
                        <th>
                          <input type = "number" value="10">
                        </th>                        
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>            
          </div>

          <!-- Pie de pagina-->
          <div class="wizard-footer">
            <div class="pull-right">
              <input type='button' class='btn btn-next btn-fill btn-warning btn-wd btn-sm' name='next' value='Siguiente' />
              <input type='button' class='btn btn-finish btn-fill btn-warning btn-wd btn-sm' name='finish' value='Confirmar' />
            </div>
            <div class="pull-left">
              <input type='button' class='btn btn-previous btn-fill btn-default btn-wd btn-sm' name='previous' value='Atras' />
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

</script>


{!! Html::script('app/helpers/crud_operate.js') !!}
{!! Html::script('app/admin/generate.js') !!}


{!! Html::script('wizar/js/jquery.bootstrap.wizard.js') !!}
{!! Html::script('wizar/js/wizard.js') !!}


@stop