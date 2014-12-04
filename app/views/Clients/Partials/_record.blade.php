{{ Form::open(array('url' => 'registro')) }}
		<h1>Registrar Clientes</h1>
		<p>
			{{ Form::label('Nombre', 'Nombre') }}
			{{ Form::text('nombre', Input::old('nombre'), array('placeholder' => 'Nombre Completo')) }}
		</p>

		<p>
			{{ Form::label('Direccion', 'Direccion') }}
			{{ Form::text('direccion') }}
		</p>
		<p>
			{{ Form::label('Telefono', 'Telefono') }}
			{{ Form::text('telefono') }}
		</p>

		<p>
			{{ Form::label('Email', 'Email') }}
			{{ Form::text('email') }}
		</p>

		<p>{{ Form::submit('Guardar') }}</p>
{{ Form::close() }}