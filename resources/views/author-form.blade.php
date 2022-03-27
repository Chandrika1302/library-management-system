@extends('layouts.base')

@section('content')

@if(!isset($author))
<form method="POST">
    @csrf
<input type="text" name="name" placeholder="Name" > 
<input type="text" name="description" placeholder="Description" > 
<input type="submit" value="Submit" >
</form>
@else
<form method="POST">
    @csrf
<input type="text" name="name" placeholder="Name" value="{{$author->name}}">
<input type="text" name="description" placeholder="Description" value="{{$author->description}}" > 
<input type="hidden" value="{{$author->id}}" name="id">
<input type="submit" value="Submit" >
</form>

@endif

@stop
