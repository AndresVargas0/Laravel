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
            <img class="ml-10 w-10 h-10 hover:rotate-180 transition-transform ease-in-out" src="{{asset('Imgs/logo.png')}}" alt="">
            <a class="pl-3 text-white" href="/">TOURS</a>
        </div>
        
        <ul class="p-4 justify-end">
            <a class="ml-4 mr-4 text-white" href="/"><i class="fa-solid fa-house text-xl hover:scale-105 hover:border-b-2"></i></a>
            <a class="ml-4 mr-4 text-white" href="/content"><i class="fa-solid fa-route text-xl hover:scale-105 hover:border-b-2"></i></a>
            <a class="ml-4 mr-4 text-white" href="/"><i class="fa-solid fa-headset text-xl hover:scale-105 hover:border-b-2"></i></a>
            <a class="ml-4 mr-4 text-white" href="{{route('count')}}"><i class="fa-solid fa-user text-xl hover:scale-105 hover:border-b-2"></i></a>
            <a class="ml-4 mr-4 text-white" href="/"><i class="fa-solid fa-door-open text-xl hover:scale-105 hover:border-b-2"></i></a>
        </ul>
    </header>
    <bo
        @yield('count')
        @yield('content')
    </body>
</html>
