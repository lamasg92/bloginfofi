@extends('main')

@section('title', '| Etiquetas')

@section('content')

	<div class="row">
		<div class="col-md-8">
			<h1>Etiquetas</h1>
			<table class="table">
				<thead>
					<tr>
						<th>N°</th>
						<th>Nombre</th>
					</tr>
				</thead>

				<tbody>
					@foreach ($tags as $tag)
					<tr>
						<th>{{ $tag->id }}</th>
						<td><a href="{{ route('tags.show', $tag->id) }}">{{ $tag->name }}</a></td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div> <!-- end of .col-md-8 -->

		<div class="col-md-3">
			<div class="well">
				{!! Form::open(['route' => 'tags.store', 'method' => 'POST']) !!}
					<h3>Nueva Etiqueta</h3>
					{{ Form::label('name', 'Nombre:') }}
					{{ Form::text('name', null, ['class' => 'form-control']) }}

					{{ Form::submit('Guardar', ['class' => 'btn btn-primary btn-block btn-h1-spacing']) }}
				
				{!! Form::close() !!}
			</div>
		</div>
	</div>

@endsection