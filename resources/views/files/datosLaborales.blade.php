<div class="datos-laborales">
    <div class="TitulodatosPersonales">
        <div class="titulos-encabezados">
            <div class="encabezadoDatosPersonales">Referencias Laborales</div>
        </div>
    </div>
    <div class="cuerpo-datos-laborales">                  
        <table class="tabla-laborales"  cellpadding="5px" border=1 cellspacing=0 >                           
                        
                <tr>
                    <td align="center" colspan="6"> <strong> Empresa #</strong> </td>
                </tr>
                <tr>
                    <td><strong>Empresa:</strong></td>
                    <td>{{ $data['dl1'] }}</td>
                    <td><strong>Dirección</strong>:</td>
                    <td colspan="3">{{ $data['dl2'] }}</td>
                </tr>
                <tr>
                    <td><strong>Teléfono</strong>:</td>
                    <td>{{ $data['dl3'] }}</td>
                    <td ><strong>Cargo:</strong></td>
                    <td colspan="3">{{ $data['dl4'] }}</td>
                </tr>
                <tr>
                    <td><strong>Jefe Inmediato:</strong></td>
                    <td>{{ $data['dl5'] }}</td>
                    <td><strong>Puesto del Jefe inmediato:</strong></td>
                    <td colspan="3">{{ $data['dl6'] }}</td>
                </tr>
                <tr>
                    <td><strong>Fecha Incio:</strong></td>
                    <td>{{ $data['dl7'] }}</td>
                    <td><strong>Fecha Fin:</strong></td>
                    <td>{{ $data['dl8'] }}</td>
                    <td><strong>último Salario</strong></td>
                    <td>{{ $data['dl9'] }}</td>
                </tr>
                <tr>
                    <td><strong>Motivo de Retiro:</strong></td>
                    <td colspan="5">{{ $data['dl10'] }}</td>
                </tr>     
                <tr>
                    <td colspan="6"><strong>Referencia obtenida de la empresa</strong></td>
                </tr>                           
                <tr>
                    <td><strong>Departamento que confirma:</strong></td>
                    <td>{{ $data['dl11'] }}</td>
                    <td><strong>Nombre y Puesto:</strong></td>
                    <td colspan="3">{{ $data['dl12'] }}</td>
                </tr>
                <tr>
                    <td><strong>Fecha en la que laboró:</strong></td>
                    <td>{{ $data['dl13'] }}</td>
                    <td><strong>Puesto que desempeño:</strong></td>
                    <td colspan="3">{{ $data['dl14'] }}</td>
                </tr>
                <tr>
                    <td><strong>Tiene llamadas de atencion:</strong></td>
                    <td>{{ $data['dl15'] }}</td>
                    <td><strong>Motivo del retiro:</strong></td>
                    <td colspan="3">{{ $data['dl16'] }}</td>
                </tr>  
                <tr>
                    <td><strong>Jefe Inmediato:</strong></td>
                    <td>{{ $data['dl17'] }}</td>
                    <td><strong>Nombre y Puesto:</strong></td>
                    <td colspan="3">{{ $data['dl18'] }}</td>
                </tr>     
                <tr>
                    <td><strong>Mencione como fue su desempeño:</strong></td>
                    <td>{{ $data['dl19'] }}</td>
                    <td><strong>Cual fue su fortaleza laboral:</strong></td>
                    <td colspan="3">{{ $data['dl20'] }}</td>
                </tr>                  
                <tr>
                    <td><strong>Qué áreas debe de mejora:</strong></td>
                    <td>{{ $data['dl21'] }}</td>
                    <td><strong>Como fueron sus relaciones interpersonales:</strong></td>
                    <td colspan="3">{{ $data['dl22'] }}</td>
                </tr>     
                <tr>
                    <td><strong>Motivo de retiro:</strong></td>
                    <td colspan="5">{{ $data['dl23'] }}</td>
                </tr>  
            
        </table>  
        <div class="spaceJob">
            
        </div>

        

        @for ($i = 0; $i < 10; $i++)      
        <table class="tabla-laborales"  cellpadding="5px" border=1 cellspacing=0 >                       

                <tr>
                    <td align="center" colspan="6"> <strong> Empresa #</strong> </td>
                </tr>
                <tr>
                    <td><strong>Empresa:</strong></td>
                    <td>{{ $data['dl1'] }}</td>
                    <td><strong>Dirección</strong>:</td>
                    <td colspan="3">{{ $data['dl2'] }}</td>
                </tr>
                <tr>
                    <td><strong>Teléfono</strong>:</td>
                    <td>{{ $data['dl3'] }}</td>
                    <td ><strong>Cargo:</strong></td>
                    <td colspan="3">{{ $data['dl4'] }}</td>
                </tr>
                <tr>
                    <td><strong>Jefe Inmediato:</strong></td>
                    <td>{{ $data['dl5'] }}</td>
                    <td><strong>Puesto del Jefe inmediato:</strong></td>
                    <td colspan="3">{{ $data['dl6'] }}</td>
                </tr>
                <tr>
                    <td><strong>Fecha Incio:</strong></td>
                    <td>{{ $data['dl7'] }}</td>
                    <td><strong>Fecha Fin:</strong></td>
                    <td>{{ $data['dl8'] }}</td>
                    <td><strong>último Salario</strong></td>
                    <td>{{ $data['dl9'] }}</td>
                </tr>
                <tr>
                    <td><strong>Motivo de Retiro:</strong></td>
                    <td colspan="5">{{ $data['dl10'] }}</td>
                </tr>                 
                <tr>
                    <td colspan="6"><strong>Referencia obtenida de la empresa</strong></td>
                </tr>                           
                <tr>
                    <td><strong>Departamento que confirma:</strong></td>
                    <td>{{ $data['dl11'] }}</td>
                    <td><strong>Nombre y Puesto:</strong></td>
                    <td colspan="3">{{ $data['dl12'] }}</td>
                </tr>
                <tr>
                    <td><strong>Fecha en la que laboró:</strong></td>
                    <td>{{ $data['dl13'] }}</td>
                    <td><strong>Puesto que desempeño:</strong></td>
                    <td colspan="3">{{ $data['dl14'] }}</td>
                </tr>
                <tr>
                    <td><strong>Tiene llamadas de atencion:</strong></td>
                    <td>{{ $data['dl15'] }}</td>
                    <td><strong>Motivo del retiro:</strong></td>
                    <td colspan="3">{{ $data['dl16'] }}</td>
                </tr>  
                <tr>
                    <td><strong>Jefe Inmediato:</strong></td>
                    <td>{{ $data['dl17'] }}</td>
                    <td><strong>Nombre y Puesto:</strong></td>
                    <td colspan="3">{{ $data['dl18'] }}</td>
                </tr>     
                <tr>
                    <td><strong>Mencione como fue su desempeño:</strong></td>
                    <td>{{ $data['dl19'] }}</td>
                    <td><strong>Cual fue su fortaleza laboral:</strong></td>
                    <td colspan="3">{{ $data['dl20'] }}</td>
                </tr>                  
                <tr>
                    <td><strong>Qué áreas debe de mejora:</strong></td>
                    <td>{{ $data['dl21'] }}</td>
                    <td><strong>Como fueron sus relaciones interpersonales:</strong></td>
                    <td colspan="3">{{ $data['dl22'] }}</td>
                </tr>     
                <tr>
                    <td><strong>Motivo de retiro:</strong></td>
                    <td colspan="5">{{ $data['dl23'] }}</td>
                </tr>  
            
        </table> 
            <div class="spaceJob2">            
            </div>
        @endfor
    </div>
</div>    

