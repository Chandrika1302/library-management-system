@extends('layouts.base')

@section('content')

<h3>
    {{$book->name}}
</h3>
<p>
    description:
{{$book->description}}

</p>
<p>
    year:
{{$book->year}}

</p><p>
    author:
{{$book->author}}

</p>
<form action="/book/delete" method="POST">
    @csrf
    <input type="hidden" name="id" value="{{$book->id}}">
    <input type="submit" value="Delete">
</form>

<a href="/book/update?id={{$book->id}}" class="button">Update</a>

@stop
