@extends('layouts.app')

@section('content')
        <h1 class="pull-left">Album3s</h1>
        <a class="btn btn-primary pull-right" style="margin-top: 25px" href="{!! route('album3s.create') !!}">Add New</a>

        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>

        @include('album3s.table')
        
@endsection
