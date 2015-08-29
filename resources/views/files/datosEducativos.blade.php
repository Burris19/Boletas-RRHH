<div class="datos-educativos">
	<div class="TitulodatosPersonales">
		<div class="titulos-encabezados">
			<div class="encabezadoDatosPersonales">Datos Educativos</div>
		</div>
	</div>
	<div class="cuerpo-datos-educativos">
		<table class="tabla-hermanos"  cellpadding="5px" border=1 cellspacing=0 >
			<tr>
			  <td><strong>Nivel</strong></td>
			  <td><strong>Establecimiento</strong></td>
			  <td><strong>Dirección</strong></td>
			  <td><strong>Fecha</strong></td>
			  <td><strong>Titulo</strong></td>
			</tr>
			<tr>
			  <td>Primaria</td>
			  <td>{{ $data['de1'] }}</td>
			  <td>{{ $data['de2'] }}</td>
			  <td>{{ $data['de3'] }}</td>
			  <td></td>
			</tr>
			<tr>
			  <td>Secundaria</td>
			  <td>{{ $data['de4'] }}</td>
			  <td>{{ $data['de5'] }}</td>
			  <td>{{ $data['de6'] }}</td>
			  <td></td>
			</tr>
			<tr>
			  <td>Diversificado</td>
			  <td>{{ $data['de7'] }}</td>
			  <td>{{ $data['de8'] }}</td>
			  <td>{{ $data['de10'] }}</td>
			  <td>{{ $data['de9'] }}</td>
			</tr>
			<tr>
			  <td>Universidad</td>
			  <td>{{ $data['de11'] }}</td>
			  <td>{{ $data['de12'] }}</td>
			  <td>{{ $data['de14'] }}</td>
			  <td>{{ $data['de13'] }}</td>
			</tr>
			<tr>
			  <td><strong>Observación</strong></td>
			  <td colspan="4">{{ $data['de15'] }}</td>
			</tr>
		</table>
	</div>
</div>