@extends('layouts.app')

@section('content')
        <div class="row">
            <div class="col-sm-12">
                <h1 class="pull-left">Edit Album3</h1>
            </div>
        </div>

        @include('core-templates::common.errors')

        <div class="row">
            {!! Form::model($album3, ['route' => ['album3s.update', $album3->id], 'method' => 'patch']) !!}

            @include('album3s.fields')

            {!! Form::close() !!}
        </div>
@endsection
