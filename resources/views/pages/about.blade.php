@extends('layouts.default')
@section('content')

<h1>About Page</h1>

<h3>People I like:</h3>
<ul>
    @foreach($people as $person)
    <li>{{$person}}</li>
    @endforeach
</ul>


@stop
