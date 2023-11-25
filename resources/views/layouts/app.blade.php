<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title') | elianpullen.nl</title>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <header>
        <nav>
            <div class="navbar">
                <a href="{{ route('home') }}">Home</a>
                <a href="{{ route('about') }}">About</a>
{{--                <a href="https://youtu.be/dQw4w9WgXcQ?si=FfPysxMb10pM26ID">Services</a>--}}
                <a href="{{ route('contact') }}">Contact</a>
            </div>
        </nav>
    </header>
</head>
<body>
@yield('content')
</body>

<footer>
    &copy; All rights reserved
</footer>
</html>
