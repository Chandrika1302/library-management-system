@extends('layouts.base')

@section('content')

@if(!isset($book))
<form method="POST">
    @csrf
<input type="text" name="name" placeholder="Name" > <br> <br>
<input type="text" name="description" placeholder="Description" > <br> <br>
<input type="number" name="year" placeholder="Year" > <br> <br>
<select name="author" class="input">
    @foreach ($authors as $author)
            <option value='{{$author["name"]}}'>
               {{$author["name"]}}
             </option>
    @endforeach
</select>
<input type="submit" value="Submit" >
</form>

@else
<form method="POST">
    @csrf
<input type="text" name="name" placeholder="Name" value="{{$book->name}}"> <br> <br>
<input type="text" name="description" placeholder="Description" value="{{$book->description}}" > <br> <br>
<input type="hidden" value="{{$book->id}}" name="id">
<input type="number" name="year" placeholder="Year" value="{{$book->year}}" > <br> <br>
<select name="author" value="{{$book->author}}" class="input">
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
<button type="submit" class="input">Update</button>
</form>

@endif

@stop
