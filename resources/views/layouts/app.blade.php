<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') - My Laravel App</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <header>
        <nav>
            <!-- Navigation links go here -->
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <!-- Footer content goes here -->
    </footer>

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
