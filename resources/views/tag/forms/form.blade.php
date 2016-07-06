<div class="col-md-4">
	
<div class="form-group">
	{{ Form::label('Nombre')}}
	{{ Form::text('name',null,['class'=>'form-control']) }}
</div>

<div class="form-group">
	{{ Form::label('Descripcion')}}
	{{ Form::text('description',null,['class'=>'form-control'])}}
</div>

<div class="form-group">
	{{ Form::label('Estado')}}
	<select name="status" class="form-control">
		<option selected="" disabled="">-- Seleccionar --</option>
		@if(isset($tag->status))
			@if($tag->status == 1)
			<option value="1" selected="">Activo</option>
			<option value="0">Inactivo</option>
			@else
			<option value="1">Activo</option>
			<option value="0" selected="">Inactivo</option>
			@endif
		@else
		<option value="1">Activo</option>
		<option value="0">Inactivo</option>		
		@endif
		
	</select>
</div>

</div>