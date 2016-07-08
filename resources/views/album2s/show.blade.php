@extends('layouts.app')

@section('content')
    @include('album2s.show_fields')

    <div class="form-group">
           <a href="{!! route('album2s.index') !!}" class="btn btn-default">Back</a>
    </div>
@endsection
