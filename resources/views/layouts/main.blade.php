<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Sistem Peminjaman Ruangan</title>
    <link rel="stylesheet" href="/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+3:ital,wght@0,200..900;1,200..900&display=swap"
        rel="stylesheet">
</head>

<body>
    @if (!in_array(Route::currentRouteName(), ['login', 'register']))
        @include('layouts.header')
    @endif

    @yield('container')

    @if (!in_array(Route::currentRouteName(), ['login', 'register']))
        @include('layouts.footer')
    @endif

    <!-- AlpineJS -->
    <script defer src="https://unpkg.com/@alpinejs/collapse@latest/dist/cdn.min.js"></script>
    <script defer src="https://unpkg.com/alpinejs@latest/dist/cdn.min.js"></script>

    <!-- Font Awesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"
        integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs=" crossorigin="anonymous"></script>
</body>

</html>
