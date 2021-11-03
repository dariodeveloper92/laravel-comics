
@extends('layouts.app')
{{-- Titolo --}}
@section('titolo', 'Characters')

{{-- main - characters --}}
@section('contenuto')
    <div class="container_characters">
        <div class="text_img">
            <h1> Contenuto Characters</h1>    
            <li><a class="button_title" href="/comics"> Series: </a></li>
            <br>
        </div>
        @foreach ($comics as $comic)
        <div >
            <h2>{{ $comic['title'] }}</h2>
            <br/>
            <p>{{ $comic['description'] }}</p>
            <br/>
        </div>
        @endforeach
    </div>
@endsection     