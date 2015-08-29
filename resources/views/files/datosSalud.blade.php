<div class="datos-medicos">
    <div class="TitulodatosPersonales">
        <div class="titulos-encabezados">
            <div class="encabezadoDatosPersonales">Cuadro de Salud</div>
        </div>
    </div>
    <div class="cuerpo-datos-medicos">
        <table class="tabla-hermanos"  cellpadding="5px" border=1 cellspacing=0 >
            <tr>
              <td><strong>Descripcion</strong></td>
              <td><strong>Parte Afectada</strong></td>
              <td><strong>Fecha</strong></td>
            </tr>

            <tr>
              <td>Fracturas</td>
              <td>{{ $data['sa1'] }}</td>
              <td>{{ $data['sa2'] }}</td>
            </tr>
            <tr>
            <td>Operaciones</td>
              <td>{{ $data['sa3'] }}</td>
              <td>{{ $data['sa4'] }}</td>
            </tr>
            <tr>
            <td>Actualmente toma Medicamentos</td>
              <td>{{ $data['sa5'] }}</td>
              <td>{{ $data['sa6'] }}</td>
            </tr>
            <tr>
            <td>Utiliza Anteojos</td>
              <td>{{ $data['sa7'] }}</td>
              <td>{{ $data['sa8'] }}</td>
            </tr>
            <tr>
            <td>Tatuajes</td>
              <td>{{ $data['sa7'] }}</td>
              <td>{{ $data['sa7'] }}</td>
            </tr>
        </table>
    </div>
</div>