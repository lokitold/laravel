<div class="col-md-6">

  <div class="form-group">
  	{{ Form::label('Nombre')}}
  	{{ Form::text('name',null,['class'=>'form-control']) }}
  </div>


  <div class="form-group">
    <div class="col-md-6">
      <label> Apellido Paterno</label>
    	{{ Form::text('lastnamep',null,['class'=>'form-control']) }}
    </div>
    <div class="col-md-6">
      <label> Apellido Materno </label>
    	{{ Form::text('lastnamem',null,['class'=>'form-control']) }}
    </div>
  </div>

  <div class="form-group">
    {{ Form::label('Numero Telefonico') }}
    {{ Form::text('phone_number' ,null , ['class'=>'form-control']) }}
  </div>

  <div class="form-group">
  	{{ Form::label('Estado')}}
  	<select name="status" class="form-control">
  		<option selected="" disabled="">-- Seleccionar --</option>
  		@if(isset($autor->status))
  			@if($autor->status == 1)
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

  <div class="form-group">
    {{ Form::label('description') }}
    <textarea class="form-control" name="description" rows="4" cols="40"></textarea>
  </div>

</div>
