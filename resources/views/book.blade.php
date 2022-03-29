@extends('layouts.base')

@section('content')
<div class="m-10 rounded-md bg-opacity-50 bg-white backdrop-blur-md shadow-xl text-2xl p-4 font-sans ">
    <h3 class="m-2 font-medium">
        Book Name:
        {{$book->name}}
    </h3>
    <p>
    <div class="font-medium inline">Description:</div>
    {{$book->description}}

    </p>
    <p>
    <div class="font-medium inline">Year:</div>
    {{$book->year}} </p>
    <p class="mt-2 font-medium">
        Author:
        {{$book->author}}

    </p>
</div>
<form action="/book/delete" method="POST">
    @csrf
    <input type="hidden" name="id" value="{{$book->id}}">
    <input type="submit" value="Delete"
        class="m-10 rounded-md bg-opacity-50 bg-white backdrop-blur-md shadow-xl text-xl p-4 font-sans font-medium ">
</form>

<a href="/book/update?id={{$book->id}}"
    class="m-10 rounded-md bg-opacity-50 bg-white backdrop-blur-md shadow-xl text-xl p-4 font-sans font-medium">Update</a>

@stop