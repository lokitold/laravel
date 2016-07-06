@extends('layouts.app')

@section('content')
<div class="container">
  <div class="page-header">
    <h2> Archivos Catalogados
      <input type="button" class="btn btn-info pull-right" name="name" value="BUSCAR">
    </h2>

  </div>

  <label> Tipo de archivo</label>
  <form role="form" class="form-group">
   <label class="radio-inline">
     <input type="radio" name="optradio">Imagenes
   </label>
   <label class="radio-inline">
     <input type="radio" name="optradio">Videos
   </label>
   <label class="radio-inline">
     <input type="radio" name="optradio">Ambos
   </label>
 </form>

 <div class="col-md-4">
   <div class="form-group">
     <label>Etiquetas</label>
     <input type="text" class="form-control" name="name" placeholder="Ingresar busqueda por etiquetas">
   </div>

   <div class="form-group">
     <label>Lugar </label>
     <input type="text" class="form-control" name="name" placeholder="Ingresar Lugar">
   </div>

   <div class="form-group">
     <label>Personajes </label>
     <input type="text" class="form-control" name="name" placeholder="Ingresar Personajes">
   </div>

   <div class="form-group">
     <label>Area</label>
     <select class="form-control" name="">
       <option value="option">-- Seleccionar area--</option>
     </select>
   </div>

   <div class="form-group">
     <label>Autor</label>
     <select class="form-control" name="">
       <option value="option">-- Seleccionar autor--</option>
     </select>
   </div>

   <div class="form-group">
     <label>Album</label>
     <select class="form-control" name="">
       <option value="option">-- Seleccionar album--</option>
     </select>
   </div>


   </div>

</div>
@endsection
