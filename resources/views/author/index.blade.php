@extends('layouts.app')

@section('content')
<div class="container">

	<div class="page-header">
		<h1>
			 Autores
			{{ link_to_route('authors.create', 'Create','' , array('class' => 'btn btn-info pull-right')) }}
				{!!Html::script('js/buscador.js')!!}
		</h1>
	</div>

	<div class="col-sm-3 col-md-3 pull-right">
		<div class="form-group has-feedback">
	    <label class="control-label">Buscador</label>
	    <input type="text" class="form-control" id="buscar" onkeyup="buscador()" placeholder="Buscar..." />
	    <i class="glyphicon glyphicon-search form-control-feedback"></i>
		</div>
	</div>

	<table class="table table-hover">
		<thead>
			<th>Nombre</th>
			<th> Apellidos</th>
			<th> Telefono</th>
			<th> Estado </th>
			<th> Descripcion </th>
			<th> Accion </th>
		</thead>
		@foreach($autor as $autor)
			<tbody>
					<td>{{ $autor->name }}</td>
				  <td>{{ $autor->lastnamep }}{{ $autor->lastnamem }}</td>
					<td>{{ $autor->phone_number}}</td>
					<td>{{ $autor->description }}</td>
					<td>{{ $autor->status }}</td>
					<td>
					<a href="{{ route('authors.edit', ['id' => $autor->id]) }}" class="btn btn-success">Editar</a>
					</td>
					<td>
					{{ Form::open(['route' => ['tags.destroy', $autor->id ], 'method'=>'DELETE']) }}
						<button type="submit" class="btn btn-danger">Eliminar</button>
					{{ Form::close() }}
					</td>
			</tbody>
  	@endforeach

	</table>

</div>
@endsection
