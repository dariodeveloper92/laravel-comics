@extends('layouts.app')
{{-- Titolo --}}
@section('titolo', 'Comics')

 {{-- main - comics --}}
 @section('contenuto')
 <div class="container_comics"> 
    <h1> Contenuto comics</h1>    
    <li><a href="/comics"> Prezzo: </a></li>
    @foreach ($comics as $comic)
        {{ $comic['title'] }}
        <br/>
        {{ $comic['price'] }}
        <br/>
    @endforeach
 </div>
@endsection 
    
    