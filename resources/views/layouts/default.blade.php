<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="logo.png">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&family=Playfair+Display:ital,wght@1,500&display=swap">
    @yield('title')
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/js/main.js', 'resources/js/data.js'])
</head>

<body>
    @include('layouts.partials.topbar')
    @include('layouts.partials.header')
    @yield('content')
    @include('layouts.partials.footer')
</body>

</html>