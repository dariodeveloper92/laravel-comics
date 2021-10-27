
@extends('layouts.app')
{{-- Titolo --}}
@section('titolo', 'Movies')

{{-- main - movies --}}
@section('contenuto')
    <h1> Contenuto comics</h1>    
    <li><a href="/comics"> Series: </a></li>
    @foreach ($comics as $comic)
        {{ $comic['title'] }}
        <br/>
        {{ $comic['series'] }}
        <br/>
    @endforeach
@endsection     