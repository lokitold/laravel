@extends('layouts.app')

@section('content')
<div class="container">
	<br>
		<div class="page-header">
		  <h1>
        	Crear Etiquetas
				
				<a class="btn btn-default pull-right" href="{!!URL::to('/tags')!!}" >Cancelar</a>
				<button id="btn-save-tag" class="btn btn-default pull-right">Guardar</button>
		  </h1>
	 </div>
	 		
		  <br>
		  <div class="panel-body">
		    {!! Form::open(['route'=>'tags.store' , 'method'=>'POST',  'id'=>'create-tag-form']) !!}
				@include('tag/forms/form')

			{!! Form::close()!!}
		  </div>



	<script type="text/javascript">
		$('#btn-save-tag').click(function(){
			$("#create-tag-form").submit();
		});
	</script>
</div>
@endsection