@extends('layouts.app')

@section('content')
	<div class="container">
	<div class="page-header">
		<h1>
			 Etiquetas
			{{ link_to_route('tags.create', 'Crear Nueva etiqueta','' ,
													array('class' => 'btn btn-info pull-right')) }}
		</h1>
		{!!Html::script('js/buscador.js')!!}
	</div>

	<div class="col-sm-3 col-md-3 pull-right">
		<div class="form-group has-feedback">
	    <label class="control-label">Buscador</label>
	    <input type="text" class="form-control" id="buscar" onkeyup="buscador()" placeholder="Buscar..." />
	    <i class="glyphicon glyphicon-search form-control-feedback"></i>
	</div>
	</div>

	<table class="table table-hover" id="datos">
		<thead>
			<th>Nombre</th>
			<th>Descripcion</th>
			<th>Estado</th>
			<th>Accion</th>
		</thead>
		@foreach($tag as $tag)
			<tbody>
				<td> {{ $tag->name }}</td>
				<td> {{ $tag->description }}</td>
				<td> {{ $tag->status }}</td>
				<td>
				<a href="{{ route('tags.edit', ['id' => $tag->id]) }}" class="btn btn-success">Editar</a>
				</td>
				<td>
				{{ Form::open(['route' => ['tags.destroy', $tag->id ], 'method'=>'DELETE']) }}
					<button type="submit" class="btn btn-danger">Eliminar</button>
				{{ Form::close() }}
				</td>
			</tbody>
		@endforeach
	</table>

	</div>
@endsection
