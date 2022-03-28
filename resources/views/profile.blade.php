@extends('layouts.base')

@section('content')

<h2
    class="text-5xl text-center py-24 font-extrabold text-transparent bg-clip-text bg-gradient-to-b via-slate-700 to-slate-800 w-full">
    Welcome to Online Library </h2>
<ul class="text-xl">
    <li>The Library Has {{$authorsCount}} Authors</li>
    <li>The Library contains {{$booksCount}} Books</li>
</ul>


@stop