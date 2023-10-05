@extends('layouts.welcome')
@section('title')
 - Turismo, Ofertas y Mas
@endsection
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