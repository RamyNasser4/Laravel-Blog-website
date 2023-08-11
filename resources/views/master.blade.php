<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment 15 @yield('title')</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div class="h-100">
        <header>@include('header')</header>
        <div id="main" class="d-flex flex-column justify-center items-center" style="height: 100%;">@yield('content')</div>
        <footer>@include('footer')</footer>
    </div>
    <script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>