@extends('layouts.base')

@section('content')

@if(!isset($author))
<form method="POST"
    class="exp mt-56 pt-84 flex flex-col rounded-md bg-opacity-50 bg-white backdrop-blur-md shadow-xl text-xl p-12 font-sans font-medium w-1/2">
    @csrf
    <input class="shadow-xl block rounded-md w-full p-2 mb-4" type="text" name="name" placeholder="Name">
    <input class="shadow-xl block rounded-md w-full p-2 mb-4" type="text" name="description" placeholder="description">
    <input class="shadow-xl block rounded-md w-full p-2 mb-4 bg-sky-500 text-sky-900" type="submit" value="Submit">
</form>
@else
<form method="POST">
    @csrf
    <input type="text" name="name" placeholder="Name" value="{{$author->name}}">
    <input type="text" name="description" placeholder="Description" value="{{$author->description}}">
    <input type="hidden" value="{{$author->id}}" name="id">
    <input type="submit" value="Submit">
</form>

@endif

@stop