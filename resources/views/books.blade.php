@extends('layouts.base')

@section('content')


@if (count($books)>0)
<div>
    <div class="text-5xl text-center py-12 font-extrabold text-transparent bg-clip-text bg-gradient-to-b
        via-slate-700 t o-slate-800">Books</div>
    <div>
        <ul class="exp flex flex-col justify-center mb-10">
            @foreach ($books as $book)
            <li class=" m-2 rounded-md bg-opacity-50 bg-white backdrop-blur-md shadow-xl text-xl p-4 font-sans
            font-medium">
                <a href='/book?id={{$book["id"]}}'
                    class="shadow-xl rounded-md bg-opacity-50 backdrop-blur-md p-2 font-bold bg-white rounded-md">Name:
                    {{$book["name"]}}</a>
                <div class="mt-2">
                    Description:
                    {{ $book["description"] }}
                </div>
                <div>
                    Author:
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
    <h2 class="text-center text-3xl mt-6 font-bold">No Books found</h2>
    @endif


    @stop