<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>
<body>
    <header>
        <img src="{{ asset('images/search.jpg') }}" style="width:50px; height:50px" alt="">
   @yield('header')     
    </header>
    <main>
    @yield('maincontent')
    </main>
    <footer>@yield('footer')</footer>
</body>
</html>