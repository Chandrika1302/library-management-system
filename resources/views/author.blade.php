@extends('layouts.base')

@section('content')



<h2>
    {{$author->name}}
</h2>

<p>
{{$author->description}}
</p>

@isset($error)
<div class="error">
    {{$error}}
</div>
@endisset

@if (count($books)>0)
    <div>
    Books:
        <ul>
        @foreach ($books as $book)
            <li>
                <a href='/book?id={{$book["id"]}}'>{{$book["name"]}}</a>
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
    <input type="submit" value="Delete">
</form>

<a href="/author/update?id={{$author->id}}" class="button">Update</a>

@stop
