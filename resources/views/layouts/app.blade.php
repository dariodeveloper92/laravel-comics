<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> @yield('titolo') </title>
</head>
<body>
    {{-- importo i partials --}}
    @include('partials.header')

    <main>
        @yield('contenuto')
    </main>

    @include('partials.footer')
</body>
</html>