
@extends('layouts.app')
{{-- Titolo --}}
@section('titolo', 'Characters')

{{-- main - movies --}}
@section('contenuto')
    <div class="container_characters">
        <h1> Contenuto Characters</h1>    
        <li><a href="/comics"> Series: </a></li>
        @foreach ($comics as $comic)
        <h2>{{ $comic['title'] }}</h2>
            <br/>
            <p>{{ $comic['description'] }}</p>
            <br/>
        @endforeach
    </div>
@endsection     