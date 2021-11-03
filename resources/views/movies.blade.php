@extends('layouts.app')
{{-- Titolo --}}
@section('titolo', 'Characters')

{{-- main - movies --}}
@section('contenuto')
    <div class="container_movies">
        <div class="text_img">
            <h1> Contenuto Movies</h1>    
            <li><a class="button_title" href="/movies"> FUMETTI: </a></li>
            <br>
        </div>
        @foreach ($comics as $comic)
        <div >
            <h2  class="title">{{ $comic['title'] }}</h2>
            <br/>
            <p>{{ $comic['series'] }}</p>
            <br/>
        </div>
        @endforeach
    </div>
@endsection     