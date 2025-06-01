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
        <nav class="navbar navbar-expand-lg navbar-light bg-light mb-4">
            <div class="container">
                <a class="navbar-brand" href="#">Workshop</a>
            </div>
        </nav>
        <main class="container">

            <div class="text-center mt-5">
                <h1>Willkommen zum Workshop!</h1>
                @yield('content')
            </div>
        </main>
    </div>
</body>

</html>
