<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>pdf</title>
	{!! Html::style('/css/pdf.css') !!}
</head>
<body>
		<div class="principal">
				<div class="header">
						@include('files.encabezado')
				</div>
				<div class="info-code">
						@include('files.codigo')
				</div>
				<div class="container">
						<h4 class="title">informacion personal</h4>
						@include('files.datosPersonales')
				</div>
				<div class="container">
						<h4 class="title">informacion familiar</h4>
						@include('files.datosFamiliares')
				</div>
				<div class="container">
						<h4 class="title">Informacion sobre Hermanos</h4>
						@include('files.datosHermanos')
				</div>
				<div class="container">
						<h4 class="title">informacion educativa</h4>
						@include('files.datosEducativos')
				</div>
				<div class="container">
						<h4 class="title">referencias laborales</h4>
						@include('files.datosLaborales')
				</div>
				<div class="container">
						<h4 class="title">presupuesto</h4>
						@include('files.datosPresupuesto')
				</div>
				<div class="container">
						<h4 class="title">informacion sobre la vivienda</h4>
						@include('files.datosVivienda')
				</div>
				<div class="container">
						<h4 class="title">Cuadro de salud</h4>
						@include('files.datosSalud')
				</div>
				<div class="container">
						<h4 class="title">vicios</h4>
						@include('files.datosVicios')
				</div>
				<div class="container">
						<h4 class="title">Referencias vecinos</h4>
						@include('files.datosVecinos')
				</div>
				<div class="container footer2">
					<div class="footer">
							<p>{{ $data['name'] }}</p>
							<p>{{ $data['job'] }}</p>
					</div>
				</div>
				<div class="container">						
						@include('files.datosConclusion')
				</div>
				<div class="container">
						<h4 class="title">Anexos</h4>
						@include('files.datosAnexos')
				</div>
				<div class="container">

				</div>
		</div>

</body>
</html>
