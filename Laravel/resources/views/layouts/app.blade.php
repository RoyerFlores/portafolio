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
    @if(session('success'))
        <script>
            alert("{{ session('success') }}");
        </script>
    @endif
    @include('layouts.partials.header')
    <main>
        @yield('main')
    </main>
    @include('layouts.partials.footer')
    <script src="{{ asset('assets/js/script.js') }}"></script>
</body>

</html>