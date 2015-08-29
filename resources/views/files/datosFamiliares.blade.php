<div class="datos-familiares">
	<div>
		<div class="titulos-encabezados">
			<div>Datos Familiares </div>
		</div>
	</div>
	<div class="cuerpo-datos-familares">
		<div class="Izquierda">
			<div>
				<div class="label-datos-familiares"><strong>Nombre del Padre:</strong></div>
				<div class="input-datos-familiares"><input type = "text" value = "{{ $data['df1'] }}"></div>
			</div>
			<div>
				<div class="label-datos-familiares"><strong>Edad:</strong></div>
				<div class="input-datos-familiares"><input type = "text" value = "{{ $data['df2'] }}"></div>
			</div>
			<div>
				<div class="label-datos-familiares"><strong>Dirección:</strong></div>
				<div class="input-datos-familiares"><input type = "text" value = "{{ $data['df7'] }}"></div>
			</div>
			<div>
				<div class="label-datos-familiares"><strong>Ingresos:</strong></div>
				<div class="input-datos-familiares"><input type = "text" value = "{{ $data['df4'] }}"></div>
			</div>
		</div>
		<div class="Derecho">
			<div>
				<div class="label-datos-familiares"><strong>Numéro Telefónico:</strong></div>
				<div class="input-datos-familiares"><input type = "text" value = "{{ $data['df6'] }}"></div>
			</div>
			<div>
				<div class="label-datos-familiares"><strong>A qué se dedica:</strong></div>
				<div class="input-datos-familiares"><input type = "text" value = "{{ $data['df5'] }}"></div>
			</div>
			<div>
				<div class="label-datos-familiares"><strong>Originario de:</strong></div>
				<div class="input-datos-familiares"><input type = "text" value = "{{ $data['df3'] }}"></div>
			</div>
		</div>
		<div class="footer-relacion">
			<div>
				<div class="label" id="input-direccion"><strong>Relacion con Padre:</strong></div>
				<div class="input3" id="label-direccion"><input type = "text" value = "{{ $data['df8'] }}"></div>
			</div>
		</div>
		<div class="madre">
			<div class="Izquierda">	
				<div>
					<div class="label-datos-familiares"><strong>Nombre de la Madre:</strong></div>
					<div class="input-datos-familiares"><input type = "text" value = "{{ $data['df9'] }}"></div>
				</div>
				<div>
					<div class="label-datos-familiares"><strong>Edad:</strong></div>
					<div class="input-datos-familiares"><input type = "text" value = "{{ $data['df10'] }}"></div>
				</div>
				<div>
					<div class="label-datos-familiares"><strong>Dirección:</strong></div>
					<div class="input-datos-familiares"><input type = "text" value = "{{ $data['df15'] }}"></div>
				</div>
				<div>
					<div class="label-datos-familiares"><strong>Ingresos:</strong></div>
					<div class="input-datos-familiares"><input type = "text" value = "{{ $data['df12'] }}"></div>
				</div>
			</div>
			<div class="Derecho">
				<div>
					<div class="label-datos-familiares"><strong>Numéro Telefónico:</strong></div>
					<div class="input-datos-familiares"><input type = "text" value = "{{ $data['df14'] }}"></div>
				</div>
				<div>
					<div class="label-datos-familiares"><strong>A qué se dedica:</strong></div>
					<div class="input-datos-familiares"><input type = "text" value = "{{ $data['df13'] }}"></div>
				</div>
				<div>
					<div class="label-datos-familiares"><strong>Originaria de:</strong></div>
					<div class="input-datos-familiares"><input type = "text" value = "{{ $data['df11'] }}"></div>
				</div>
			</div>
			<div class="footer-relacion">
				<div>
					<div class="label" id="input-direccion"><strong>Relacion con Madre:</strong></div>
					<div class="input3" id="label-direccion"><input type = "text" value = "{{ $data['df16'] }}"></div>
				</div>
			</div>
		</div> 
		<div class="madre">
			<div class="Izquierda">	
				<div>
					<div class="label-datos-familiares-esposo"><strong>Nombre del Esposo:</strong></div>
					<div class="input-datos-familiares-esposo"><input type = "text" value = "{{ $data['df17'] }}"></div>
				</div>
				<div>
					<div class="label-datos-familiares-esposo"><strong>Edad:</strong></div>
					<div class="input-datos-familiares-esposo"><input type = "text" value = "{{ $data['df18'] }}"></div>
				</div>
				<div>
					<div class="label-datos-familiares-esposo"><strong>Dirección:</strong></div>
					<div class="input-datos-familiares-esposo"><input type = "text" value = "{{ $data['df23'] }}"></div>
				</div>
				<div>
					<div class="label-datos-familiares-esposo"><strong>A qué se dedica:</strong></div>
					<div class="input-datos-familiares-esposo"><input type = "text" value = "{{ $data['df21'] }}"></div>
				</div>
			</div>
			<div class="Derecho">
				<div>
					<div class="label-datos-familiares-esposo"><strong>Numéro Telefónico:</strong></div>
					<div class="input-datos-familiares-esposo"><input type = "text" value = "{{ $data['df22'] }}"></div>
				</div>
				<div>
					<div class="label-datos-familiares-esposo"><strong>Ingresos:</strong></div>
					<div class="input-datos-familiares-esposo"><input type = "text" value = "{{ $data['df20'] }}"></div>
				</div>
				<div>
					<div class="label-datos-familiares-esposo"><strong>Originario de:</strong></div>
					<div class="input-datos-familiares-esposo"><input type = "text" value = "{{ $data['df19'] }}"></div>
				</div>
				<div>
					<div class="label-datos-familiares-esposo"><strong>Número de hijos</strong></div>
					<div class="input-datos-familiares-esposo"><input type = "text" value = "{{ $data['df19'] }}"></div>
				</div>
			</div>
		</div>		
		<div>
			<div class="lbl"><strong>¿Tiene o tuvo un familiar privado de su libertad ?</strong></div>
			<div class="inp"><textarea cols="40" rows="3">{{ $data['df80'] }}, {{ $data['df81'] }}</textarea> </div>
		</div> 
	</div>
</div>