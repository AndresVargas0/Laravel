<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<script src="https://kit.fontawesome.com/880d240d27.js" crossorigin="anonymous"></script>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Tours</title>
        @vite('resources/css/app.css')
    </head>
    <header class="bg-green-600 flex justify-between text-lg">
        <div class="flex items-center justify-start">
            <img class="ml-10 w-10 h-10" src="{{asset('Imgs/logo.png')}}" alt="">
            <a class="pl-3 text-white" href="/">TOURS</a>
        </div>
        
        <ul class="p-4 justify-end">
            <a class="rounded-sm hover:border-b-2 ml-4 mr-4 text-white" href="/"><i class="fa-solid fa-house"></i></a>
            <a class="rounded-sm hover:border-b-2 ml-4 mr-4 text-white" href="/content"><i class="fa-solid fa-route"></i></a>
            <a class="rounded-sm hover:border-b-2 ml-4 mr-4 text-white" href="/"><i class="fa-solid fa-headset"></i></a>
            <a class="rounded-sm hover:border-b-2 ml-4 mr-4 text-white" href="{{route('count')}}"><i class="fa-solid fa-user"></i></a>
            <a class="rounded-sm hover:border-b-2 ml-4 mr-4 text-white" href="/"><i class="fa-solid fa-door-open"></i></a>
        </ul>
    </header>
    <body class="body">
        @yield('count')
        @yield('content')
    </body>
</html>
