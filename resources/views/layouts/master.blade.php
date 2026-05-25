<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DC Comics</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    @include('partials.header')

    <div class="jumbotron"></div>

    <main style="background-color: #1c1c1c;">
        @yield('content')
    </main>

    @include('partials.footer')
</body>

</html>