@extends('layouts.base')

@section('content')

@if (count($authors)>0)
<div>
    <div class="text-5xl text-center py-12 font-extrabold text-transparent bg-clip-text bg-gradient-to-b
        via-slate-700 t o-slate-800">
        Authors</div>
    <ul class="exp flex flex-col justify-center mb-10">
        @foreach ($authors as $author)
        <li
            class=" m-2 rounded-md bg-opacity-50 bg-white backdrop-blur-md shadow-xl text-2xl p-4 font-sans font-medium">
            <a href='/author?id={{$author["id"]}}'
                class="shadow-xl rounded-md bg-opacity-50 p-2 font-bold bg-white rounded-md">Name:
                {{$author["name"]}}</a>
            <p class="my-2">Description:
                {{ $author["description"] }}
            </p>
        </li>
        @endforeach
    </ul>
</div>
@else
<h2 class="text-center text-3xl mt-6 font-bold">No Authors found</h2>
@endif


@stop