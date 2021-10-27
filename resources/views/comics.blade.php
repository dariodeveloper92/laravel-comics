@extends('layouts.app')
{{-- Titolo --}}
@section('titolo', 'Comics')

{{-- main --}}
@section('contenuto')
    <h1> Contenuto comics</h1>    
    <li><a href="/comics"> FUMETTI: </a></li>
    @foreach ($comics as $comic)
        {{ $comic['title'] }}
        <br/>
    @endforeach

@endsection