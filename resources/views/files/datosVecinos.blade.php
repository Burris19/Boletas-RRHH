<?php $indice = 1;?>
@for ($i = 1; $i <=3; $i++)
		<table class="table-brother"  cellpadding="5px" cellspacing=0 @if( $data['v'.$i] === '-----' ) @if( $i != 1 ) style="display: none" @endif  @endif >
			<tr>
					<td align="center" class="job-title" colspan="6"> <strong> Referencia #{{ $indice++ }}</strong> </td>
			</tr>
			<tr>
				<td><strong>Nombre:</strong></td>
				<td >{{ $data['v'.$i++] }}</td>
				<td><strong>Dirección</strong></td>
				<td colspan="5">{{ $data['v'.$i++] }}</td>
			</tr>
			<tr>
				<td><strong>Edad:</strong></td>
				<td>{{ $data['v'.$i++] }}</td>
			</tr>
			<tr>
				<td><strong>Cuanto tiempo tiene de conocerlo:</strong></td>
				<td>{{ $data['v'.$i++] }}</td>
				<td><strong>Cuanto tiempo tiene de vivir el candidato en esa casa:</strong></td>
				<td >{{ $data['v'.$i++] }}</td>
			</tr>
			<tr>
				<td><strong>¿Usted sabe si fuma?</strong></td>
				<td>{{ $data['v'.$i++] }}</td>
				<td><strong>¿Usted sabe si consume bebidas alcoholicas?</strong></td>
				<td>{{ $data['v'.$i++] }}</td>
			</tr>
			<tr>
				<td><strong>¿Usted sabe si es un vecino tranquilo qué no pelea con la gente?</strong></td>
				<td colspan="5">{{ $data['v'.$i++] }}</td>
			</tr>
			<tr>
				<td><strong>¿Usted lo recomienda como persona?</strong></td>
				<td colspan="5">{{ $data['v'.$i] }}</td>
			</tr>
		</table>
@endfor
