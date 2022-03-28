@extends('layouts.base')

@section('content')
<div>
    <h2>
        {{$author->name}}
    </h2>

    <p>
        {{$author->description}}
    </p>

    @isset($error)
    <div class=" error">
        {{$error}}
    </div>
</div>
@endisset

@if (count($books)>0)
<div>
    Books:
    <ul class="exp flex flex-col justify-center mb-10">
        @foreach ($books as $book)
        <li
            class=" m-2 rounded-md bg-opacity-50 bg-white backdrop-blur-md shadow-xl text-2xl p-4 font-sans font-medium">
            <a class="shadow-xl rounded-md bg-opacity-50 p-2 font-bold bg-white rounded-md"
                href='/book?id={{$book["id"]}}'>{{$book["name"]}}</a>
            <div>
                {{ $book["description"] }}
            </div>
            <div>
                Year:
                {{ $book["year"] }}
            </div>
        </li>
        @endforeach
    </ul>
</div>
@endif

<form action="/author/delete" method="POST">
    @csrf
    <input type="hidden" name="id" value="{{$author->id}}">
    <input type="submit" value="Delete"
        class="m-10 rounded-md bg-opacity-50 bg-white backdrop-blur-md shadow-xl text-xl p-4 font-sans font-medium ">
</form>

<a href="/author/update?id={{$author->id}}"
    class="m-10 rounded-md bg-opacity-50 bg-white backdrop-blur-md shadow-xl text-xl p-4 font-sans font-medium">Update</a>

@stop