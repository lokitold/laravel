@extends('layouts.app')

@section('content')
<div class="container">

  <h2>Archivos No Catalogados
    {{ link_to_route('uncataloged.create', 'Catalogar','' ,
                        array('class' => 'btn btn-info pull-right')) }}
  </h2>

</div>
@endsection
