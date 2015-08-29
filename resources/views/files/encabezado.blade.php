<div class="encabezado">
	<div class="logo">
		<img src="logo.gif">
	</div>
	<div class="Titulo">
		<h2>Estudio Socioeconomico</h2>
	</div>
	<div class="foto">
		@if( $data['input1'] === '-----' )

		@else
			<img src="{{ $data['input1'] }}" alt="" class="imgg"/>
		@endif
	</div>
</div>