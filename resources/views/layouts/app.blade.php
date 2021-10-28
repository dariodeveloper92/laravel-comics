<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title> @yield('titolo') </title>
</head>
<body>
    {{-- importo i partials.header --}}
    @include('partials.header')
    
    {{-- main --}}
    <main class="box_fumetti">
       @yield('contenuto')
    </main>
    
    {{-- importo i partials.main --}}
    @include('partials.main')

    {{-- importo i partials.footer --}}
    @include('partials.footer')
</body>
</html>