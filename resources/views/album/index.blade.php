@extends('layouts.app')

@section('content')
	<div class="container">
	<div class="page-header">
		<h1>
			 Albumes
			{{ link_to_route('albums.create', 'Crear Nuevo Album','' ,
													array('class' => 'btn btn-info pull-right')) }}
		</h1>

		<br>

		{!!Html::script('js/buscador.js')!!}

	</div>

	<div class="col-sm-3 col-md-3 pull-right">
		
	</div>
	<br>
	<br>
	<br>
	<br>

	<table class="table table-hover" id="datos">
		<thead>
			<th>Nombre</th>
			<th>Descripcion</th>
			<th>Estado</th>
			<th>Accion</th>
		</thead>
		@foreach($album as $album)
			<tbody>
				<td> {{ $album->name }}</td>
				<td> {{ $album->description }}</td>
				<td> {{ $album->status }}</td>
				<td>
				<a href="{{ route('albums.edit', ['id' => $album->id]) }}" class="btn btn-success">Editar</a>
				</td>
				<td>
				{{ Form::open(['route' => ['albums.destroy', $album->id ], 'method'=>'DELETE']) }}
					<button type="submit" class="btn btn-danger">Eliminar</button>
				{{ Form::close() }}
				</td>
			</tbody>
		@endforeach
	</table>

	</div>
@endsection
