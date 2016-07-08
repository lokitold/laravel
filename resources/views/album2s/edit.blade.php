@extends('layouts.app')

@section('content')
        <div class="row">
            <div class="col-sm-12">
                <h1 class="pull-left">Edit Album2</h1>
            </div>
        </div>

        @include('core-templates::common.errors')

        <div class="row">
            {!! Form::model($album2, ['route' => ['album2s.update', $album2->id], 'method' => 'patch']) !!}

            @include('album2s.fields')

            {!! Form::close() !!}
        </div>
@endsection
