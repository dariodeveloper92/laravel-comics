@extends('layouts.app')
{{-- Titolo --}}
@section('titolo', 'Comics')

 {{-- main - comics --}}
 @section('contenuto')
    <div class="container_comics"> 
        <div class="text_img">
            <h1> Contenuto comics</h1>    
            <li><a class="button_title" href="/comics"> Copertina: </a></li>
            <br>
        </div>
        @foreach ($comics as $comic)
            {{-- <h2>{{ $comic['title'] }}</h2> --}}
            <br/>
            <div class="box_img">
                <img src="{{ $comic['thumb'] }}" alt="img">
                <br/>
                {{-- {{ $comic['price'] }} --}}
                <br/>
            </div>
        @endforeach
    </div>
@endsection 
    
    