@extends('layouts.base')

@section('content')

<h2> Welcome to Online Library </h2>
<ul>
    <li>The Library Has {{$authorsCount}} Authors</li>
    <li>The Library contains {{$booksCount}} Books</li>
</ul>


@stop
