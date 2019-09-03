@extends('main')

@section('title', '| Iniciar')

@section('content')
	
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			{!! Form::open() !!}

				{{ Form::label('email', 'Correo:') }}
				{{ Form::email('email', null, ['class' => 'form-control']) }}

				{{ Form::label('password', "Contraseña:") }}
				{{ Form::password('password', ['class' => 'form-control']) }}
				
				<br>
				{{ Form::checkbox('remember') }}{{ Form::label('remember', "Recordarme") }}
				
				<br>
				{{ Form::submit('Entrar', ['class' => 'btn btn-primary btn-block']) }}

				<p><a href="{{ url('password/reset') }}">Olvide mi contraseña</a>


			{!! Form::close() !!}
		</div>
	</div>

@endsection