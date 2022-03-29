@extends('layouts.base')

@section('content')

@if(!isset($author))
<form method="POST"
    class="exp mt-56 pt-84 flex flex-col rounded-md bg-opacity-50 bg-white backdrop-blur-md shadow-xl text-xl p-12 font-sans font-medium w-1/2">
    @csrf
    <label for="name" class="text-left text-2xl">Name</label>
    <input class="shadow-xl block rounded-md w-full p-2 mb-4" type="text" name="name" placeholder="Name">
    <label for="description" class="text-left text-2xl">Description</label>
    <input class="shadow-xl block rounded-md w-full p-2 mb-4" type="text" name="description" placeholder="description">
    <input class="shadow-xl block rounded-md w-full p-2 mb-4 bg-sky-500 text-sky-900" type="submit" value="Submit">
</form>
@else
<form method="POST"
    class="exp mt-56 pt-84 flex flex-col rounded-md bg-opacity-50 bg-white backdrop-blur-md shadow-xl text-xl p-12 font-sans font-medium w-1/2">
    @csrf
    <label for="name" class="text-left text-2xl">Name</label>
    <input class="shadow-xl block rounded-md w-full p-2 mb-4" type="text" name="name"
        placeholder="Write your Author Name" value="{{$author->name}}">
    <label for="description" class="text-left text-2xl">Description</label>
    <input class="shadow-xl block rounded-md w-full p-2 mb-4" type="text" name="description" placeholder="Description"
        value="{{$author->description}}">
    <input type="hidden" value="{{$author->id}}" name="id">
    <input class="shadow-xl block rounded-md w-1/5 p-2 mb-4 bg-sky-500 text-sky-900" type="submit" value="Update">
</form>

@endif

@stop