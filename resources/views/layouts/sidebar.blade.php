<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <title>@yield('title', 'ArkaCafe')</title>
    @stack('parti')
</head>

<body class="min-h-screen bg-white overflow-hidden">
    <div class="ml-56">
        @include('components.header')
    </div>
    <x-sidebar/>
    @yield('content')

</body>
</html>
