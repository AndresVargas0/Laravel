@extends('layouts.welcome')
@section('content')
@vite('resources/css/cards.css')
@vite('resources/js/loading.js')
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
            <div class="card">
                <img class="img-card hover:scale-105 transition-transform ease-in-out" src="{{asset("Imgs/Huanuco.jpg")}}" alt="">
                <div class="card-content">
                    <h1 class="card-title font-bold hover:underline">Huanuco</h1>
                    <p class="font-extralight text-sm">La Ciudad de la Eterna Primavera</p>
                    <p class="text-green-500 hover:text-green-700">✓ Perfecto para Vacacionar</p>    
                </div>
                <button id="redirigir" class="button-card hover:scale-105 transition-transform ease-in-out font-semibold">
                     <i class="fa-solid fa-ticket hover:-rotate-45 transition-transform ease-in-out"></i>
                    <a class="ml-2" href="">Pasajes</a> 
                </button>
                <div class="card-precio"><p class="absolute mr-10 -mt-8 font-bold text-xl text-red-600" href="">S/.180</p><p class="-mt-2 mr-2 font-normal text-sm line-through text-red-400">S/.200</p></div>
            </div>
            <div class="card">
                <img class="img-card hover:scale-105 transition-transform ease-in-out" src="{{asset("Imgs/Huanuco.jpg")}}" alt="">
                <div class="card-content">
                    <h1 class="card-title font-bold hover:underline">Huanuco</h1>
                    <p class="font-extralight text-sm">La Ciudad de la Eterna Primavera</p>
                    <p class="text-green-500 hover:text-green-700">✓ Perfecto para Vacacionar</p>    
                </div>
                <button id="redirigir1" class="button-card hover:scale-105 transition-transform ease-in-out font-semibold">
                     <i class="fa-solid fa-ticket hover:-rotate-45 transition-transform ease-in-out"></i>
                    <a class="ml-2" href="">Pasajes</a> 
                </button>
                <div class="card-precio"><p class="absolute mr-10 -mt-8 font-bold text-xl text-red-600" href="">S/.180</p><p class="-mt-2 mr-2 font-normal text-sm line-through text-red-400">S/.200</p></div>
            </div>
            <div class="card">
                <img class="img-card hover:scale-105 transition-transform ease-in-out" src="{{asset("Imgs/Huanuco.jpg")}}" alt="">
                <div class="card-content">
                    <h1 class="card-title font-bold hover:underline">Huanuco</h1>
                    <p class="font-extralight text-sm">La Ciudad de la Eterna Primavera</p>
                    <p class="text-green-500 hover:text-green-700">✓ Perfecto para Vacacionar</p>    
                </div>
                <button id="redirigir2" class="button-card hover:scale-105 transition-transform ease-in-out font-semibold">
                     <i class="fa-solid fa-ticket hover:-rotate-45 transition-transform ease-in-out"></i>
                    <a class="ml-2" href="">Pasajes</a> 
                </button>
                <div class="card-precio"><p class="absolute mr-10 -mt-8 font-bold text-xl text-red-600" href="">S/.180</p><p class="-mt-2 mr-2 font-normal text-sm line-through text-red-400">S/.200</p></div>
            </div>
            <div class="card">
                <img class="img-card hover:scale-105 transition-transform ease-in-out" src="{{asset("Imgs/Huanuco.jpg")}}" alt="">
                <div class="card-content">
                    <h1 class="card-title font-bold hover:underline">Huanuco</h1>
                    <p class="font-extralight text-sm">La Ciudad de la Eterna Primavera</p>
                    <p class="text-green-500 hover:text-green-700">✓ Perfecto para Vacacionar</p>    
                </div>
                <button id="redirigir3" class="button-card hover:scale-105 transition-transform ease-in-out font-semibold">
                     <i class="fa-solid fa-ticket hover:-rotate-45 transition-transform ease-in-out"></i>
                    <a class="ml-2" href="">Pasajes</a> 
                </button>
                <div class="card-precio"><p class="absolute mr-10 -mt-8 font-bold text-xl text-red-600" href="">S/.180</p><p class="-mt-2 mr-2 font-normal text-sm line-through text-red-400">S/.200</p></div>
            </div>
            <div class="card">
                <img class="img-card hover:scale-105 transition-transform ease-in-out" src="{{asset("Imgs/Huanuco.jpg")}}" alt="">
                <div class="card-content">
                    <h1 class="card-title font-bold hover:underline">Huanuco</h1>
                    <p class="font-extralight text-sm">La Ciudad de la Eterna Primavera</p>
                    <p class="text-green-500 hover:text-green-700">✓ Perfecto para Vacacionar</p>    
                </div>
                <button id="redirigir4" class="button-card hover:scale-105 transition-transform ease-in-out font-semibold">
                     <i class="fa-solid fa-ticket hover:-rotate-45 transition-transform ease-in-out"></i>
                    <a class="ml-2" href="">Pasajes</a> 
                </button>
                <div class="card-precio"><p class="absolute mr-10 -mt-8 font-bold text-xl text-red-600" href="">S/.180</p><p class="-mt-2 mr-2 font-normal text-sm line-through text-red-400">S/.200</p></div>
            </div>
        </div>
    </div>
</body>
<footer class="bg-green-600 h-52 flex items-center justify-center">
    <h1 class="text-xl flex items-center font-extrabold text-white border-r-2 px-10 h-32">HUANUCO TOURS</h1>
    <div class="pt-3 text-center text-white border-r-2 px-10 h-32">
        <h2>Redes</h2>
        <a href="">Facebook <br></a>
        <a href="">Whatsapp <br></a>
        <a href="">Instagram</a>
    </div>
    <div>
        <img class=" img-foot px-10 h-16 " src="{{asset('Imgs/perusalen.png')}}" alt="">
    </div>
</footer>
@endsection 