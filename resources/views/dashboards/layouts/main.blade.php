<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
    <link rel="stylesheet" href="/css/style.css">

</head>

<body class="flex">
    @include('dashboards.partials.aside')
    <div class="w-full flex flex-col h-screen">
        @include('dashboards.partials.navbar')
        @yield('container')
    </div>
    <!-- AlpineJS -->
    <script defer src="https://unpkg.com/@alpinejs/collapse@latest/dist/cdn.min.js"></script>

    <script defer src="https://unpkg.com/alpinejs@latest/dist/cdn.min.js"></script>
    <!-- Font Awesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"
        integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs=" crossorigin="anonymous"></script>
</body>

</html>
