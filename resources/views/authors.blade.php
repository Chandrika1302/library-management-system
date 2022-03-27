@extends('layouts.base')

@section('content')

@if (count($authors)>0)
    <div class="main-component">
    Authors:
        <ul>
        @foreach ($authors as $author)
            <li>
                <a href='/author?id={{$author["id"]}}'>{{$author["name"]}}</a>
                <p>
                {{ $author["description"] }}
                </p>
            </li>
        @endforeach
        </ul>
    </div>
@else
<h2 class="error">No Authors found</h2>
@endif


@stop
