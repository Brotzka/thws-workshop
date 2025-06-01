<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Workshop')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div id="app">
        @include('partials.navigation')
        <main class="container">
            <div class="text-center mt-5">
                @yield('content')
            </div>
        </main>
    </div>
</body>

</html>
