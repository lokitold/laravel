@extends('layouts.app')

@section('content')
    @include('album3s.show_fields')

    <div class="form-group">
           <a href="{!! route('album3s.index') !!}" class="btn btn-default">Back</a>
    </div>
@endsection
