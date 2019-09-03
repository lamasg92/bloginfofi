@extends('main')

@section('title', '| Categorias')

@section('content')

	<div class="row">
		<div class="col-md-8">
			<h1>Categorias</h1>
			<table class="table">
				<thead>
					<tr>
						<th>N°</th>
						<th>Nombre</th>
					</tr>
				</thead>

				<tbody>
					@foreach ($categories as $category)
					<tr>
						<th>{{ $category->id }}</th>
						<td>{{ $category->name }}</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div> <!-- end of .col-md-8 -->

		<div class="col-md-3">
			<div class="well">
				{!! Form::open(['route' => 'categories.store', 'method' => 'POST']) !!}
					<h3>Nueva Categoria</h3>
					{{ Form::label('name', 'Nombre:') }}
					{{ Form::text('name', null, ['class' => 'form-control']) }}

					{{ Form::submit('Guardar', ['class' => 'btn btn-primary btn-block btn-h1-spacing']) }}
				
				{!! Form::close() !!}
			</div>
		</div>
	</div>

@endsection