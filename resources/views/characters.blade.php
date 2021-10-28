
@extends('layouts.app')
{{-- Titolo --}}
@section('titolo', 'Characters')

{{-- main - movies --}}
@section('contenuto')
    <div class="container_characters">
        <h1> Contenuto Characters</h1>    
        <li><a href="/comics"> Series: </a></li>
        @foreach ($comics as $comic)
            {{ $comic['title'] }}
            <br/>
            {{ $comic['series'] }}
            <br/>
        @endforeach
    </div>
@endsection     