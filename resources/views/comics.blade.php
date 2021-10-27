@extends('layouts.app')
{{-- Titolo --}}
@section('titolo', 'Comics')

 {{-- main - comics --}}
 @section('contenuto')
    <h1> Contenuto comics</h1>    
    <li><a href="/comics"> Prezzo: </a></li>
    @foreach ($comics as $comic)
        {{ $comic['title'] }}
        <br/>
        {{ $comic['price'] }}
        <br/>
    @endforeach
@endsection 
    {{-- <div class="buttonBottom">
        <button class="buttonBlue"> LOAD MORE </button>
    </div>
    <div id="container-main-bottom">
        <div class="container-icons">
            <ul>
                <li>
                    <a href="#">
                        <img src="{{ asset('images/buy-comics-digital-comics.png') }}" alt="">
                        <p>DIGITAL COMICS</p>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="{{ asset('images/buy-comics-merchandise.png') }}" alt="">
                        <p>DC MERCHANDISE</p>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="{{ asset('images/buy-comics-subscriptions.png') }}" alt="">
                        <p>SUBSCRIPTON</p>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="{{ asset('images/buy-comics-shop-locator.png') }}" alt="">
                        <p>COMIC SHOP LOCATOR</p>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="{{ asset('images/buy-dc-power-visa.svg') }}" alt="">
                        <p>DC POWER VISA</p>
                    </a>
                </li>
            </ul>
        </div>
    </div> --}}
    