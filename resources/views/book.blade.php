@extends('layouts.base')

@section('content')
<div class="m-10 rounded-md bg-opacity-50 bg-white backdrop-blur-md shadow-xl text-2xl p-4 font-sans font-medium ">
    <h3>
        Book Name:
        {{$book->name}}
    </h3>
    <p>
        Description:
        {{$book->description}}

    </p>
    <p>
        Year:
        {{$book->year}}

    </p>
    <p>
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