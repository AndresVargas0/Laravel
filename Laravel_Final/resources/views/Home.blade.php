@extends('layouts.NavHome')
@section('title')
 - Turismo, Ofertas y Mas
@endsection
@section('Home')

@vite('resources/css/home.css')
@vite('resources/css/boletas.css')
@vite('resources/js/loading.js')
@vite('resources/js/boletas.js')

<body>
    <div class="flex justify-center">
        <div class="pr-bg-content">
            <h1 class="pr-bg-title text-xl">Viaja con Nosotros</h1>
            <h3 class="pr-bg-subtitle">¡A recorrer el Perú! Descubre todo lo que puedes conocer en cada una de las regiones</h3>
            <a class="pr-bg-button hover:scale-105 transition-transform ease-in-out" href="#ofertas">¡Viaja Ahora!</a>
        </div>
    </div>
    <img class="img-pr">
    <h1 id="ofertas" class="font-extrabold text-2xl">VIAJES <span><i class="fa-solid fa-location-arrow hover:rotate-90 transition-transform ease-in-out"></i></span></h1>
    <div class="caja-cards">
        @foreach ($destinos as $datos)
            <div class="card">
                <img class="img-card hover:scale-105 transition-transform ease-in-out" src="{{asset("Imgs/Huanuco.jpg")}}" alt="">
                <div class="card-content">
                    <h1 class="card-title font-bold hover:underline">{{$datos->title}}</h1>
                    <p class="font-extralight text-sm">{{$datos->ubication}}</p>
                    <p class="text-green-500 hover:text-green-700">✓ {{$datos->content}}</p>    
                </div>
                <button class="boton button-card hover:scale-105 transition-transform ease-in-out font-semibold show-popup">
                    <i class="fa-solid fa-ticket hover:-rotate-45 transition-transform ease-in-out"></i>
                    <a class="ml-2">Pasajes</a>
                </button>
                <div class="card-precio"><p class="absolute mr-10 -mt-8 font-bold text-xl text-red-600" href="">S/.{{$datos->price - $datos->discount}}</p><p class="-mt-2 mr-2 font-normal text-sm line-through text-red-400">S/.{{$datos->price}}</p></div>
            </div>
         @endforeach 
    </div>
    {{-- Boleta --}}
    @foreach ($destinos as $datos)
        <div id="popup" class="popup">
            <form class="popup-content flex" action="{{route('pasajescreate')}}" method="POST">
                @csrf
                <img id="popup-image" class="img-card">
                <div class="flex justify-evenly">
                    <div class="flex flex-col w-32 mt-2">
                        <p id="title" class="ml-2 text-center font-bold my-1 text-lg"></p>
                        <input type="text" id=""destino name="destino" class="my-1 text-center font-semibold" value="{{$datos->title}}">
                        <input type="text" name="ubication" class="my-1 text-center font-semibold" value="{{$datos->ubication}}" id="ubication">
                        <input type="text" name="price" id="price" class="my-1 text-center text-red-500 font-bold" value="{{$datos->price - $datos->discount}}">
                        <div class="flex flex-col justify-center">
                            <button type="submit" class="m-auto w-24 font-semibold bg-green-600 text-white p-1 mt-2 rounded-lg px-2">Comprar</button>
                            <button id="close-popup" class="m-auto w-24 bg-slate-950 text-white mt-2 p-1 rounded-lg px-3">Cerrar</button>
                        </div>
                    </div>
                    <div class="flex flex-col bg-white mt-2 ml-4">
                        <label for="" class="font-semibold text-start py-1">Dni:</label>
                        <input class="font-extralight" id="dni" name="dni" type="number" placeholder="Dni">
                        <label for="" class="font-semibold py-1 text-start">Nombre:</label>
                        <input class="font-extralight" id="name" name="name" type="text" placeholder="Nombre">
                        <label for="" class="font-semibold py-1 text-start">Correo:</label>
                        <input class="font-extralight" id="email" name="email" type="email" placeholder="Correo">
                        <label for="" class="font-semibold py-1 text-start">Celular:</label>
                        <input class="font-extralight" id="phone" name="phone" type="number" placeholder="Celular">
                    </div>
                </div>
            </form>
        </div>   
    @endforeach
</body>
<footer class="footer">
    <div>
        <h1 class="foot-company text-xl font-extrabold ">HUANUCO TOURS</h1>
        <div class="link-company">
            <a href="https://www.ytuqueplanes.com/imagenes/images/files/feriados_2023_peru.pdf" class="hover:underline cursor-pointer hover:text-green-600" target="_blank">Lista de Feriados 2023</a>
            <a href="https://www.gob.pe/senamhi" class="hover:underline cursor-pointer hover:text-green-600" target="_blank">Clima y Pronóstico del Tiempo/a>
            <a href="https://www.gob.pe/sernanp" class="hover:underline cursor-pointer hover:text-green-600" target="_blank">Áreas Naturales Protegidas</a>
            <a href="https://play.google.com/store/apps/details?id=pe.dolphin.pc_programador_new.touristpolice_new&hl=es&pli=1" class="hover:underline cursor-pointer hover:text-green-600" target="_blank">Tourist Police Perú</a>
        </div>  
    </div>
    <div class="foot-redes">
        <h2>Siguenos:</h2>
        <div class="links-redes text-2xl">
            <a href="" target="_blank"><i class="fa-brands fa-facebook p-2 hover:text-green-700"></i></a>
            <a href="" target="_blank"><i class="fa-brands fa-whatsapp p-2 hover:text-green-700"></i></a>
            <a href="" target="_blank"><i class="fa-brands fa-twitter p-2 hover:text-green-700"></i></a>
            <a href="" target="_blank"><i class="fa-brands fa-instagram p-2 hover:text-green-700"></i></a>
            <a href="" target="_blank"><i class="fa-brands fa-youtube p-2 hover:text-green-700"></i></a>
        </div>
    </div>
    <div>
        <img class="img-foot h-16 pb-4" src="{{asset('Imgs/perusalen.png')}}" alt="">
        <img class="h-8" src="{{asset('Imgs/gob-perusalen.png')}}" alt="">
    </div>
</footer>
@endsection 