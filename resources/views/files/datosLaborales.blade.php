<?php $indice = 1;?>
@for ($i = 1; $i <=230; $i++)

    <table class="table-brother"  cellpadding="5px" @if( $data['dl'.$i] === '-----' ) @if( $i != 1 ) style="display: none" @endif  @endif >
            <tr>
                <td align="center" class="job-title" colspan="6"> <strong> Empresa #{{ $indice++ }}</strong> </td>
            </tr>
            <tr>
                <td><strong>Empresa:</strong></td>
                <td>{{ $data['dl'.$i++] }}</td>
                <td><strong>Dirección</strong>:</td>
                <td colspan="3">{{ $data['dl'.$i++] }}</td>
            </tr>
            <tr>
                <td><strong>Teléfono</strong>:</td>
                <td>{{ $data['dl'.$i++] }}</td>
                <td ><strong>Cargo:</strong></td>
                <td colspan="3">{{ $data['dl'.$i++] }}</td>
            </tr>
            <tr>
                <td><strong>Jefe Inmediato:</strong></td>
                <td>{{ $data['dl'.$i++] }}</td>
                <td><strong>Puesto del Jefe inmediato:</strong></td>
                <td colspan="3">{{ $data['dl'.$i++] }}</td>
            </tr>
            <tr>
                <td><strong>Fecha Incio:</strong></td>
                <td>{{ $data['dl'.$i++] }}</td>
                <td><strong>Fecha Fin:</strong></td>
                <td>{{ $data['dl'.$i++] }}</td>
                <td><strong>último Salario</strong></td>
                <td>{{ $data['dl'.$i++] }}</td>
            </tr>
            <tr>
                <td><strong>Motivo de Retiro:</strong></td>
                <td colspan="5">{{ $data['dl'.$i++] }}</td>
            </tr>
            <tr>
                <td colspan="6"><h4>Referencia obtenida de la empresa</h4></td>
            </tr>
            <tr>
                <td><strong>Departamento que confirma:</strong></td>
                <td>{{ $data['dl'.$i++] }}</td>
                <td><strong>Nombre y Puesto:</strong></td>
                <td colspan="3">{{ $data['dl'.$i++] }}</td>
            </tr>
            <tr>
                <td><strong>Fecha en la que laboró:</strong></td>
                <td>{{ $data['dl'.$i++] }}</td>
                <td><strong>Puesto que desempeño:</strong></td>
                <td colspan="3">{{ $data['dl'.$i++] }}</td>
            </tr>
            <tr>
                <td><strong>Tiene llamadas de atencion:</strong></td>
                <td>{{ $data['dl'.$i++] }}</td>
                <td><strong>Motivo del retiro:</strong></td>
                <td colspan="3">{{ $data['dl'.$i++] }}</td>
            </tr>
            <tr>
                <td><strong>Jefe Inmediato:</strong></td>
                <td>{{ $data['dl'.$i++] }}</td>
                <td><strong>Nombre y Puesto:</strong></td>
                <td colspan="3">{{ $data['dl'.$i++] }}</td>
            </tr>
            <tr>
                <td><strong>Mencione como fue su desempeño:</strong></td>
                <td>{{ $data['dl'.$i++] }}</td>
                <td><strong>Cual fue su fortaleza laboral:</strong></td>
                <td colspan="3">{{ $data['dl'.$i++] }}</td>
            </tr>
            <tr>
                <td><strong>Qué áreas debe de mejora:</strong></td>
                <td>{{ $data['dl'.$i++] }}</td>
                <td><strong>Como fueron sus relaciones interpersonales:</strong></td>
                <td colspan="3">{{ $data['dl'.$i++] }}</td>
            </tr>
            <tr>
                <td><strong>Motivo de retiro:</strong></td>
                <td colspan="5">{{ $data['dl'.$i] }}</td>
            </tr>
    </table>
@endfor
