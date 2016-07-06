@extends('layouts.app')

@section('content')
	<div class="container">

	<br>
		<div class="page-header">
		  <h1>
        Crear Autor
				<a class="btn btn-default pull-right" href="{!!URL::to('/authors')!!}" >Cancelar</a>
				<button id="btn-save-rentals" class="btn btn-default pull-right">Guardar</button>
		  </h1>
	 </div>

		  <br>
		  <div class="panel-body">
		    {!! Form::open(['route'=>'authors.store' , 'method'=>'POST',  'id'=>'create-rentals-form']) !!}
				@include('author/forms/form')

			{!! Form::close()!!}
		  </div>



	<script type="text/javascript">
		$('#btn-save-rentals').click(function(){
			$("#create-rentals-form").submit();
		});
	</script>

</div>
@endsection
