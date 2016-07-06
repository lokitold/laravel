<div class="col-md-6">

@if(isset($area->name))
<div class="form-group">
	<label>Nombre</label>
	<input type="text" class="form-control" name="name" id="name" value="{{ $area->name }}" placeholder="Ingresar Nombre">
</div>
@else
<div class="form-group">
	<label>Nombre</label>
	<input type="text" class="form-control" name="name" id="name" placeholder="Ingresar Nombre">
</div>
@endif


<div class="form-group">
@if(isset($area->description))
	<label>Descripcion</label>
	{!! Form::textarea('descripcion',$area->description,['class'=>'form-control','placeholder'=>'Ingresar Descripcion'])!!}
@else
	<label>Descripcion</label>
	{!! Form::textarea('description',null,['class'=>'form-control','placeholder'=>'Ingresar Descripcion'])!!}
@endif
</div>

<div class="form-group">
@if(isset($area->status))
	<label>Estado</label>
	<select class="form-control" name="status" id="status">
		<option selected="" disabled="">-- Elegir Estado --</option>
		@if($area->status == 1)
			<option value="1" selected="">Activo</option>
			<option value="0">Inactivo</option>
		@else
			<option value="1">Activo</option>
			<option value="0" selected="">Inactivo</option>
		@endif
	</select>
@else
	<label>Estado</label>
	<select class="form-control" name="status" id="status">
		<option selected="" disabled="">-- Elegir Estado --</option>
		<option value="1">Activo</option>
		<option value="0">Inactivo</option>
	</select>
@endif
</div>



<div class="form-group">
@if(isset($area->abbrev))
	<label>Abreviacion</label>
	{{ Form::text('abbrev',null,['class'=>'form-control']) }}
@else
	<label>Abreviacion</label>
	<input type="text" class="form-control" name="abbrev" id="abbrev" placeholder="Ingresar abreviacion">
@endif
</div>
<br>
</div>
