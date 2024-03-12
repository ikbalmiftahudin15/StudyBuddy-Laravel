<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                   StudyBuddy
                </a>
            </div>
        </nav>


        <main class="py-4">
            @yield('content')
        </main>


        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm fixed-bottom">
            <div class="container d-flex justify-content-end align-items-center">
                <a href="{{ url('/') }}" class="navbar-text"><i class="fas fa-user"></i></a>
            </div>
        </nav>
    </div>

</body>
</html>
