<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>pdf</title>

<style type="text/css">
	#encabezado{
		border: solid;
		height: 200px;
		margin-top: -25px;
		width: 100%;
	}

	.Puesto{
		float:right;
		border: solid;
		border-bottom: 200px;
		margin: 0 auto;
		width: 200px;
	}
	.input input {
	   border: none;
	   border-bottom: solid 1px black;
	    margin-top: 0.5%;
	   width: 120%;/*tamanño de los cuadros*/
	}
	.input {
	   display: inline-block;
	   width: 50%;
	}
	.input-tabla{
		display: inline-block;
	  width: 50%;
	}
	.tabla-hermanos input{
		border: none;
	 	margin-top: 3%;
	  width: 120%;
	}


	.label {
	   display: inline-block;
	   padding-top: 3px;
	   margin-left: 12px ;
	   width: 25%;
	}

	.label-tabla{
		font-size: 15px;
		display: inline-block;
	  padding-top: 7px;
	  margin-left: 12px ;
	  width: 25%;
	}

	.footer {
	  font-size: 12px;
	  width: 100%;
	}

	.footer-relacion{
		font-size: 12px;
	  width: 100%;
	  margin-top: -150px;
	}

	strong, b {
	    font-weight: bold;
	}

	.CuerpoDatosPersonales {
		width: 100%;
		border: solid 1.5px;
		margin: 0 auto;
		height: 220px;
	}

	.Izquierda {
		display: inline-block;
		font-size: 12px;
		width: 50%;
	}

	.Derecho {
		display: inline-block;
		font-size: 12px;
		width: 49%;
	}

	#derecho-datos-familiares{
		float:right	;
	}

	#label-direccion {
	    padding-top: -20px;
	    width: 15%;
	}

	#input-direccion{
			width:7.5%;
			padding-top: 5px;
	}

	.titulos-encabezados{
		border: solid 1.5px black;
		width: 100%;
		background-color: #010C6F;
		color: white;
	}

	.input-datos-familiares{
		display: inline-block;
	   width: 50%;
	}

	.input-datos-familiares input {
	   border: none;
	   border-bottom: solid 1px black;
	   margin-top: 0.5%;
	   margin-right: 50px;
	   width: 120%;/*tamanño de los cuadros*/
	}

	.label-datos-familiares{
		display: inline-block;
		margin-top: 0.5%;
	  margin-left: 12px ;
	  width: 25%;
	}
	.input-datos-familiares-esposo{
		display: inline-block;
	  width: 50%;
	}

	.input-datos-familiares-esposo input {
	   border: none;
	   border-bottom: solid 1px black;
	   margin-top: 0.5%;
	   margin-right: 50px;
	   width: 120%;
	}

	.label-datos-familiares-esposo{
		display: inline-block;
	  padding-top: 0.5px;
	  margin-left: 12px ;
	  width: 25%;
	}

	.datos-familiares{
		margin-top: 20px;
		height: 240px;
	}

	.cuerpo-datos-familares{
		width: 100%;
		border: solid 1.5px;
	}

	.pieDePagina{
		text-align: center;
		margin: 50px;
	}

	.footer-datos-familiares {
		font-size: 12px;
		width: 	100%;
	}

	.letra {
		display: inline-block;
		float: 	left;
		margin-top: 	10px;
		margin-left: 	48px;
		width: 	5%;
	}

	.input2{
		display: inline-block;
		float: 	right;
		margin-top: 	10px;
		margin-right: 	20px;
		width: 	87.3%;
	}

	.input3{
		display: inline-block;
		margin-top: 	30px;
		width: 	87.3%;
	}

	.input3 input {
		border:none	;
		border-bottom	: 	solid 1.5px black	;
		margin-top: 	30px;
		margin-left:38px;
		width: 	531.5px;
	}

	.input2 input {
		border:none	;
		border-bottom	: 	solid 1.5px black	;
		width: 	99.5%;
	}

	.12{
		padding-bottom: -5px;
	}

	.12 input{
		padding-top:  -7px;
	}

	.linea{
		background: red;
		width: 100%;
	}

	.madre {
		margin-top: -25px;
	}

	.encabezado{
		margin-top: -25px;
		height: 100px;
	}

	.encabezado img{
		height: 75px;
		width: 100px;
	}

	.logo{
		display: inline-block;
		width: 20%;
	}

	.Titulo{
		display: inline-block;
		width: 55%;
	}

	.foto{
		display: inline-block;
		width: 20%;
		padding-left:  59px;
	}

	.tabla-hermanos{
		width: 100%;
		font-size: 12px;
		margin-left: -1px;
		margin-top: -4px;
	}

	.tabla-hermanos tbody{
		border: solid 1.5 black;
	}

	.tabla-hermanos td{
		margin-left: 55px;
	}

	.tabla-laborales tbody{
		border: solid 1.5 black;
	}

	.tabla-laborales {
		width: 100%;
		font-size: 12px;
	}

	.label-hijos{
		margin-left: 	40px;
		margin-top: 	10px;
		width: 	15%;
		display: inline-block;
		float: 	left;
		font-size: 12px;
	}

	.input-hijos{
		display: inline-block;
	}

	.hijos input{
		border:none	;
		border-bottom	: 	solid 1.5px black	;
		margin-top: 	5px;
		margin-left:10px;
		width: 	490px;
		font-size: 12px;
	}

	.datos-educativos{
		padding-top: 260px;
		height: 100px
	}

	.datos-hermanos{
		padding-top: 372px;
	}

	.datos-laborales{
		margin-top: 95px;
	}

	.cuerpo-datos-hermanos {
		width: 100%;
		border: solid 1px;
		margin: 0 auto;
		height: 0;/*tamano del cuaddro de datos personales*/
	}

	.cuerpo-datos-educativos {
		width: 100%;
		border: solid 1px;
		margin: 0 auto;
		height: 0;/*tamano del cuaddro de datos personales*/
	}

	.cuerpo-datos-laborales{
		border: solid 1px;
		height: 0;/*tamano del cuaddro de datos personales*/
		margin: 0 auto;
		width: 100%;
	}

	.datos-presupuesto{
		margin-top: 1010px;
	}

	.datos-casa{
		padding-top: 20px;
	}

	.cuerpo-datos-casa{
		margin-top: 3px;
		width: 100%;
	}

	.cuerpo-datos-presupuesto{
		margin-top: 3px;
	}
	.datos-medicos{
	padding-top: 170px;
	}

	.cuerpo-datos-medicos{
	padding-top: 1px;
	}
	.datos-vicios{
	padding-top: 20px;
	}

	.table strong {
		font-size: 13px;
	}

	.principal{
		margin-left: 30px;
	}

	.imgg{
		display: block;
		background-color: red;
	}


	/**	Anexos */

	.imagePhoto {
		/*border: 1px solid black;*/
		display: inline-block;
		height: 220px;
		margin: auto;
		width: 100%;
	}
	.photoLeft{
		display: inline-block;
		float: left;
		height: 220px;
		width: 33%;
	}
	.photoCenter{
		display: inline-block;
		float: left;
		height: 220px;
		width: 33%;
	}
	.photoRight{
		display: inline-block;
		float: left;
		height: 220px;
		width: 33%;
	}
	.imgPhoto{
		height: 200px;
		width: 100%;
	}
	.footprints{
		border: 1px solid black;
		height: 425px;
		width: 100%;
	}
	.footprints img {
		height: 425px;
		width: 100%;
	}

	.firm {
		height: 300px;
		width: 100%;
	}

	.firmDetail {
		border-top: 1px solid black;
		height: 100px;
		margin:150px auto;
		text-align: center;
		width: 50%;
	}

	.space{
		height: 220px;
	}
	.space2{
		height: 300px;
	}
	.lbl{
		font-size: 12px;
		padding-left: 7px;		
	}
	.inp{
		font-size: 12px;		
		padding-left: 7px;		
	}
	.inp textarea {
		border: 0.5px solid black;
		width: 94.5%;
		font-family: arial;
	}
	.spaceJob{
		height: 45px;
		background: red;
	}
	.spaceJob2{
		height: 40px;
		background: blue;
	}
</style>



</head>
<body>
<div class="principal">
	@include('files.encabezado')
	@include('files.codigo')
	@include('files.datosPersonales')
	@include('files.datosFamiliares')
	@include('files.datosHermanos')	
	@include('files.datosEducativos')	
	@include('files.datosLaborales')
	@include('files.datosPresupuesto')
	<!--@include('files.datosSalud')
	@include('files.datosVicios')
	@include('files.datosVecinos')-->
</div>	
</body>
</html>
