@extends('layouts.app')

@section('content')
<div class="container">
	<br>
		<div class="page-header">
		  <h1>
        	Crear Area
				
				<a class="btn btn-default pull-right" href="{!!URL::to('/areas')!!}" >Cancelar</a>
				<button id="btn-save-area" class="btn btn-default pull-right">Guardar</button>
		  </h1>
	 </div>
	 		
		  <br>
		  <div class="panel-body">
		    {!! Form::open(['route'=>'areas.store' , 'method'=>'POST',  'id'=>'create-area-form']) !!}
				@include('area/forms/form')

			{!! Form::close()!!}
		  </div>



	<script type="text/javascript">
		$('#btn-save-area').click(function(){
			$("#create-area-form").submit();
		});
	</script>
</div>
@endsection