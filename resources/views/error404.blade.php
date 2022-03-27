@extends('layouts.base')

@section('content')

@if(isset($error))

<h2 class="error">{{$error}}</h2>

@else

<h2 class="error">Error 404 not found</h2>
@endif

@stop
