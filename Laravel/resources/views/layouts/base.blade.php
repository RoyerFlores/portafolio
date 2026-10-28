<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/img/image1.webp') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>

<body>
    <main>
        @yield('main')
    </main>
    <footer>
        Integradora - Royer Joel Flores Aruquipa - 27 de octubre de 2026
    </footer>
</body>

</html>