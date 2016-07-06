@extends('layouts.app')

@section('content')
	<div class="page-header">
		<h1>
			Editar Autor
			<button id="btn-save-rentals" class="btn btn-default">Guardar</button>
			<a class="btn btn-default" href="{!!URL::to('/authors')!!}" >Cancelar</a>
		</h1>
	</div>
	<br>
	{!! Form::model($autor,['route'=>['authors.update',$autor->id] , 'method'=>'PUT', 'id'=>'edit-rentals-form']) !!}
		@include('authors/forms/form')
	{!! Form::close()!!}

<script type="text/javascript">
	$('#btn-save-rentals').click(function(){
		$("#edit-rentals-form").submit();
	});
</script>
@endsection