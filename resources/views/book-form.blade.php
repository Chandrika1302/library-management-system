@extends('layouts.base')

@section('content')

@if(!isset($book))
<form method="POST"
    class="exp mt-52 flex flex-col justify-center rounded-md bg-opacity-50 bg-white backdrop-blur-md shadow-xl text-xl p-12 font-sans font-medium w-1/2">
    @csrf
    <label for="name" class="text-left text-xl">Name</label>
    <input class="shadow-xl block rounded-md w-full p-2 mb-4" type="text" name="name" placeholder="Name">
    <label for="description" class="text-left text-xl">Description</label>
    <input class="shadow-xl block rounded-md w-full p-2 mb-4" type="text" name="description" placeholder="Description">
    <label for="year" class="text-left text-xl">Year</label>
    <input class="shadow-xl block rounded-md w-full p-2 mb-4" type="number" name="year" placeholder="Year">
    <br>
    <select name="author" class="shadow-xl block rounded-md w-full p-2 mb-4">
        @foreach ($authors as $author)
        <option value='{{$author["name"]}}'>
            {{$author["name"]}}
        </option>
        @endforeach
    </select>
    <input class="shadow-xl block rounded-md w-full p-2 mb-4 w-48 bg-sky-500 text-sky-900" type="submit" value="Submit">
</form>

@else
<form method="POST"
    class="exp mt-48 flex flex-col justify-center rounded-md bg-opacity-50 bg-white backdrop-blur-md shadow-xl text-xl p-12 font-sans font-medium w-1/2">
    @csrf
    <label for="name" class="text-left text-xl">Name</label>
    <input class="shadow-xl block rounded-md w-full p-2 mb-4" type="text" name="name" placeholder="Name"
        value="{{$book->name}}">
    <label for="description" class="text-left text-xl">Description</label>

    <input class="shadow-xl block rounded-md w-full p-2 mb-4" type="text" name="description" placeholder="Description"
        value="{{$book->description}}">
    <input type="hidden" value="{{$book->id}}" name="id">
    <label for="year" class="text-left text-xl">Year</label>
    <input class="shadow-xl block rounded-md w-full p-2 mb-4" type="number" name="year" placeholder="Year"
        value="{{$book->year}}">
    <label for="author" class="text-left text-xl">Author</label>
    <select name="author" value="{{$book->author}}" class="shadow-xl block rounded-md w-full p-2 mb-4 bg-white">
        @foreach ($authors as $author)
        @if ($author->name==$book->author)
        <option value='{{$author["name"]}}' selected='selected'>
            {{$author["name"]}}

        </option>
        @else
        <option value='{{$author["name"]}}'>
            {{$author["name"]}}
        </option>
        @endif
        @endforeach
    </select>
    <button type="submit"
        class="shadow-xl block rounded-md w-full p-2 mb-4 w-48 bg-sky-500 text-sky-900">Update</button>
</form>

@endif

@stop