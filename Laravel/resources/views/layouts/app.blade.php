<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Royer Flores - Software Developer</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/img/image1.webp') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>

<body>
    @include('layouts.partials.header')
    <main>
        @yield('main')
    </main>
    @include('layouts.partials.footer')
</body>

</html>