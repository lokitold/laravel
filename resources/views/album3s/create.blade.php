@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <h1 class="pull-left">Create New Album3</h1>
        </div>
    </div>

    @include('core-templates::common.errors')

    <div class="row">
        {!! Form::open(['route' => 'album3s.store']) !!}

            @include('album3s.fields')

        {!! Form::close() !!}
    </div>
@endsection
