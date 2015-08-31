<table class="table-brother"  cellpadding="5px" cellspacing=0 >
	<tr>
		<td><strong>Nombre:</strong></td>
		<td >{{ $data['v1'] }}</td>
		<td><strong>Edad:</strong></td>
		<td>{{ $data['v3'] }}</td>
	</tr>
	<tr>
		<td><strong>Cuanto tiempo tiene de conocerlo:</strong></td>
		<td>{{ $data['v4'] }}</td>
		<td><strong>Cuanto tiempo tiene de vivir el candidato en esa casa:</strong></td>
		<td >{{ $data['v5'] }}</td>
	</tr>
	<tr>
		<td><strong>Dirección</strong></td>
		<td colspan="3">{{ $data['v2'] }}</td>
	</tr>
	<tr>
		<td><strong>¿Usted sabe si fuma?</strong></td>
		<td>{{ $data['v6'] }}</td>
		<td><strong>¿Usted sabe si consume bebidas alcoholicas?</strong></td>
		<td>{{ $data['v7'] }}</td>
	</tr>
	<tr>
		<td><strong>¿Usted sabe si es un vecino tranquilo qué no pelea con la gente?</strong></td>
		<td colspan="3">{{ $data['v8'] }}</td>
	</tr>
	<tr>
		<td><strong>¿Usted lo recomienda como persona?</strong></td>
		<td colspan="3">{{ $data['v9'] }}</td>
	</tr>
</table>
