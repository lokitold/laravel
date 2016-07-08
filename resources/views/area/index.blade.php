@extends('layouts.app')

@section('content')
	<div class="container">
	<div class="page-header">
		<h1>
			 Areas
			{{ link_to_route('areas.create', 'Crear Nueva Area','' ,
													array('class' => 'btn btn-info pull-right')) }}
		</h1>

		<br>

		{!!Html::script('js/ma.js')!!}
		
	</div>

	<div class="col-sm-3 col-md-3 pull-right">
		<div class="form-group has-feedback">
	  
	   
	   
	</div>
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
			<th>Abreviacion</th>
			<th>other</th>
			<th>Accion</th>
		</thead>
		@foreach($area as $area)
			<tbody>
				<td> {{ $area->name }}</td>
				<td> {{ $area->description }}</td>
				<td> {{ $area->status }}</td>
				<td> {{ $area->abbrev }}</td>
				<td>
				<a href="{{ route('areas.edit', ['id' => $area->id]) }}" class="btn btn-success">Editar</a>
				</td>
				<td>
				{{ Form::open(['route' => ['areas.destroy', $area->id ], 'method'=>'DELETE']) }}
					<button type="submit" class="btn btn-danger">Eliminar</button>
				{{ Form::close() }}
				</td>
			</tbody>
		@endforeach
	</table>

	</div>

	<script>
		$(document).ready(function(){
    $('#datos').DataTable();
});
	</script>
@endsection
