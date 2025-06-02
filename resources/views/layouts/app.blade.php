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
        @include('partials.validation-errors')
        @include('partials.notification')
        <main class="container">
            @yield('content')
        </main>
    </div>
</body>

</html>
