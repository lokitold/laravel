@extends('layouts.app')

@section('content')
<div class="container">

  <div class="page-header">
    <h2> Catalogar Archivos

      <button type="button" class="btn btn-default pull-right">Cancelar</button>
      <button type="button" class="btn btn-default pull-right">Catalogar</button>

     </h2>
  </div>

    @include('uncataloged/forms/form')

</div>
@endsection
