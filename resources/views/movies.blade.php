@extends('layouts.app')
{{-- Titolo --}}
@section('titolo', 'Movies')

{{-- main - movies --}}
@section('contenuto')
    <div class="container_movies">
        <h1> Contenuto Movies</h1>    
        <li><a href="/comics"> FUMETTI: </a></li>
        @foreach ($comics as $comic)
            {{ $comic['title'] }}
            <br/>
            {{ $comic['series'] }}
            <br/>
        @endforeach
    </div>
@endsection 