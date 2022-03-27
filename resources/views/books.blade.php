@extends('layouts.base')

@section('content')


@if (count($books)>0)
    <div class="main-component">
    Books:
        <ul>
        @foreach ($books as $book)
            <li>
                <a href='/book?id={{$book["id"]}}'>{{$book["name"]}}</a>
                <div>
                {{ $book["description"] }}
                </div>
                <div>
                    author:
                {{ $book["author"] }}
                </div>
                <div>
                    Year:
                {{ $book["year"] }}
                </div>
            </li>
        @endforeach
        </ul>
    </div>

@else
<h2 class="error">No Books found</h2>
@endif


@stop
