<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Huanuco Tours @yield('title')</title>
        @vite('resources/css/app.css')
        @vite('resources/css/nav.css')
    </head>
    <header class="nav text-lg">
        <div class="flex items-center justify-start">
            <img class="ml-10 w-10 h-10 hover:rotate-180 transition-transform ease-in-out" src="{{asset('Imgs/logo.png')}}" alt="">
            <a class="pl-3 text-xl font-extrabold" href="/">HUANUCO TOURS</a>
        </div>
        <div class="p-4 justify-end">
            <a class="ml-4 mr-4" href="{{route('home')}}"><i class="fa-solid fa-house text-xl hover:scale-125 transition-transform ease-in-out"></i></a>
            <a class="ml-4 mr-4" href="{{route('home')}}"><i class="fa-solid fa-route text-xl hover:scale-125 transition-transform ease-in-out"></i></a>
            <button id="alert" class="ml-4 mr-4" href="/"><i class="fa-solid fa-headset text-xl hover:scale-125 transition-transform ease-in-out"></i></button>
            <a class="ml-4 mr-4" href="{{route('count')}}"><i class="fa-solid fa-user text-xl hover:scale-125 transition-transform ease-in-out"></i></a>
            <a class="ml-4 mr-4" href="/"><i class="fa-solid fa-door-open text-xl hover:scale-125 transition-transform ease-in-out"></i></a>
        </div>
    </header>
    <body>
        @yield('count')
        @yield('content')
        <script src="https://kit.fontawesome.com/880d240d27.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script>
            document.getElementById('alert').addEventListener('click', function() {
                Swal.fire({
                    title: 'Comunicate con Nosotros',
                    imageUrl: '{{asset('Imgs/logo.png')}}',
                    imageWidth: 200,
                    imageHeight: 200,
                    html:'+51 981 650 576 <br> Vargasesquivelandres@gmail.com',
                    position: 'top-right',
                    showCloseButton: true
                });
            });
        </script>
    </body>
</html>
