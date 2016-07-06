@extends('layouts.app')

@section('content')
<div class="container">
	<div class="page-header">
		<h1>
			Editar Etiqueta
			<button id="btn-save-tag" class="btn btn-default pull-right">Guardar</button>
			<a class="btn btn-default pull-right" href="{!!URL::to('/tags')!!}" >Cancelar</a>
		</h1>
	</div>
	<br>
	{!! Form::model($tag,['route'=>['tags.update',$tag->id] , 'method'=>'PUT', 'id'=>'edit-tag-form']) !!}
		@include('tag/forms/form')
	{!! Form::close()!!}

<script type="text/javascript">
	$('#btn-save-tag').click(function(){
		$("#edit-tag-form").submit();
	});
</script>
</div>
@endsection