@extends('layouts.welcome')

@section('titulo')
    Tours
@endsection
@section('content')
<body>
    <div>
        <div class="flex justify-center"><h1 class="z-10 absolute mt-40 text-white text-2xl font-extrabold">Viaja con Nosotros</h1><h3 class="z-10 absolute mt-48 text-white text-base font-semibold">¡A recorrer el Perú! Descubre todo lo que puedes conocer en cada una de las regiones</h3></div>
        <img class="m-auto h-96 w-screen object-cover brightness-50 cursor-pointer" src="{{asset("Imgs/wallpaper.jpeg")}}" alt="">
        <div class="flex justify-center"><a class="absolute -mt-36 p-1 pl-2 pr-2 rounded-sm font-semibold bg-blue-500 text-white hover:scale-105 transition-transform ease-in-out" href="">¡Reserva Ahora!</a></div>
        <h1 class="text-2xl font-black text-gray-600 p-5 ml-10 cursor-pointer">VIAJES <span class="cursor-pointer"><i class="fa-solid fa-location-arrow rotate-90"></i></span></h1>
        <div class="flex flex-wrap justify-evenly ml-10 mr-10 mb-10">
            <div class="border w-64 h-96 rounded-md">
                <img class="hover:scale-105 transition-transform ease-in-out w-screen rounded-md h-60" src="{{asset("Imgs/Huanuco.jpg")}}" alt="">
                <h1 class="text-center p-1 font-bold hover:underline cursor-pointer">Huanuco</h1>
                <p class="pl-5 font-extralight text-sm">La Ciudad de la Eterna Primavera</p>
                <p class="text-center pt-1 cursor-pointer text-green-600 hover:text-green-700">✓ Perfecto para Vacacionar</p>
                <div class="hover:scale-105 transition-transform ease-in-out bg-blue-600 p-2 pt-1 pb-1 font-semibold text-white rounded-sm flex justify-center items-center ml-5 mt-3 w-24">
                    <i class="fa-solid fa-ticket hover:-rotate-45 transition-transform ease-in-out"></i>
                    <a class="ml-2" href="">Pasajes</a> 
                </div>
                <div class="flex justify-end"><p class="absolute mr-10 -mt-8 font-bold text-xl text-red-600" href="">S/.180</p><p class="-mt-2 mr-2 font-normal text-sm line-through text-red-400">S/.200</p></div>
            </div>
            <div class="border w-64 h-96 rounded-md">
                <img class="hover:scale-105 transition-transform ease-in-out w-screen rounded-md h-60" src="{{asset("Imgs/Arequipa.jpg")}}" alt="">
                <h1 class="text-center p-1 font-bold hover:underline cursor-pointer">Arequipa</h1>
                <p class="pl-5 font-extralight text-sm">La Ciudad Blanca</p>
                <p class="text-center pt-1 cursor-pointer text-green-600 hover:text-green-700">✓ Perfecto para Vacacionar</p>
                <div class="hover:scale-105 transition-transform ease-in-out bg-blue-600 p-2 pt-1 pb-1 font-semibold text-white rounded-sm flex justify-center items-center ml-5 mt-3 w-24">
                    <i class="fa-solid fa-ticket hover:-rotate-45 transition-transform ease-in-out"></i>
                    <a class="ml-2" href="">Pasajes</a> 
                </div>
                <div class="flex justify-end"><p class="absolute mr-10 -mt-8 font-bold text-xl text-red-600" href="">S/.180</p><p class="-mt-2 mr-2 font-normal text-sm line-through text-red-400">S/.200</p></div>
            </div>
            <div class="border w-64 h-96 rounded-md">
                <img class="hover:scale-105 transition-transform ease-in-out w-screen rounded-md h-60" src="{{asset("Imgs/Ica.jpg")}}" alt="">
                <h1 class="text-center p-1 font-bold hover:underline cursor-pointer">Ica</h1>
                <p class="pl-5 font-extralight text-sm">La Ciudad del Eterno Sol</p>
                <p class="text-center pt-1 cursor-pointer text-green-600 hover:text-green-700">✓ Perfecto para Vacacionar</p>
                <div class="hover:scale-105 transition-transform ease-in-out bg-blue-600 p-2 pt-1 pb-1 font-semibold text-white rounded-sm flex justify-center items-center ml-5 mt-3 w-24">
                    <i class="fa-solid fa-ticket hover:-rotate-45 transition-transform ease-in-out"></i>
                    <a class="ml-2" href="">Pasajes</a> 
                </div>
                <div class="flex justify-end"><p class="absolute mr-10 -mt-8 font-bold text-xl text-red-600" href="">S/.180</p><p class="-mt-2 mr-2 font-normal text-sm line-through text-red-400">S/.200</p></div>
            </div>
            <div class="border w-64 h-96 rounded-md">
                <img class="hover:scale-105 transition-transform ease-in-out w-screen rounded-md h-60" src="{{asset("Imgs/Lima.webp")}}" alt="">
                <h1 class="text-center p-1 font-bold hover:underline cursor-pointer">Lima</h1>
                <p class="pl-5 font-extralight text-sm">La Ciudad de los Reyes</p>
                <p class="text-center pt-1 cursor-pointer text-green-600 hover:text-green-700">✓ Perfecto para Vacacionar</p>
                <div class="hover:scale-105 transition-transform ease-in-out bg-blue-600 p-2 pt-1 pb-1 font-semibold text-white rounded-sm flex justify-center items-center ml-5 mt-3 w-24">
                    <i class="fa-solid fa-ticket hover:-rotate-45 transition-transform ease-in-out"></i>
                    <a class="ml-2" href="">Pasajes</a> 
                </div>
                <div class="flex justify-end"><p class="absolute mr-10 -mt-8 font-bold text-xl text-red-600" href="">S/.180</p><p class="-mt-2 mr-2 font-normal text-sm line-through text-red-400">S/.200</p></div>
            </div>
            <div class="mt-10 border w-64 h-96 rounded-md">
                <img class="hover:scale-105 transition-transform ease-in-out w-screen rounded-md h-60" src="{{asset("Imgs/Cuzco.jpg")}}" alt="">
                <h1 class="text-center p-1 font-bold hover:underline cursor-pointer">Cusco</h1>
                <p class="pl-5 font-extralight text-sm">La Capital del Imperio Inca</p>
                <p class="text-center pt-1 cursor-pointer text-green-600 hover:text-green-700">✓ Perfecto para Vacacionar</p>
                <div class="hover:scale-105 transition-transform ease-in-out bg-blue-600 p-2 pt-1 pb-1 font-semibold text-white rounded-sm flex justify-center items-center ml-5 mt-3 w-24">
                    <i class="fa-solid fa-ticket hover:-rotate-45 transition-transform ease-in-out"></i>
                    <a class="ml-2" href="">Pasajes</a> 
                </div>
                <div class="flex justify-end"><p class="absolute mr-10 -mt-8 font-bold text-xl text-red-600" href="">S/.180</p><p class="-mt-2 mr-2 font-normal text-sm line-through text-red-400">S/.200</p></div>
            </div>
            <div class="mt-10 border w-64 h-96 rounded-md">
                <img class="hover:scale-105 transition-transform ease-in-out w-screen rounded-md h-60" src="{{asset("Imgs/MadredeDios.jpg")}}" alt="">
                <h1 class="text-center p-1 font-bold hover:underline cursor-pointer">Loreto</h1>
                <p class="pl-5 font-extralight text-sm">El Llano Amazónico</p>
                <p class="text-center pt-1 cursor-pointer text-green-600 hover:text-green-700">✓ Perfecto para Vacacionar</p>
                <div class="hover:scale-105 transition-transform ease-in-out bg-blue-600 p-2 pt-1 pb-1 font-semibold text-white rounded-sm flex justify-center items-center ml-5 mt-3 w-24">
                    <i class="fa-solid fa-ticket hover:-rotate-45 transition-transform ease-in-out"></i>
                    <a class="ml-2" href="">Pasajes</a> 
                </div>
                <div class="flex justify-end"><p class="absolute mr-10 -mt-8 font-bold text-xl text-red-600" href="">S/.180</p><p class="-mt-2 mr-2 font-normal text-sm line-through text-red-400">S/.200</p></div>
            </div>
            <div class="mt-10 border w-64 h-96 rounded-md">
                <img class="hover:scale-105 transition-transform ease-in-out w-screen rounded-md h-60" src="{{asset("Imgs/Lima.webp")}}" alt="">
                <h1 class="text-center p-1 font-bold hover:underline cursor-pointer">Lima</h1>
                <p class="pl-5 font-extralight text-sm">La Ciudad de los Reyes</p>
                <p class="text-center pt-1 cursor-pointer text-green-600 hover:text-green-700">✓ Perfecto para Vacacionar</p>
                <div class="hover:scale-105 transition-transform ease-in-out bg-blue-600 p-2 pt-1 pb-1 font-semibold text-white rounded-sm flex justify-center items-center ml-5 mt-3 w-24">
                    <i class="fa-solid fa-ticket hover:-rotate-45 transition-transform ease-in-out"></i>
                    <a class="ml-2" href="">Pasajes</a> 
                </div>
                <div class="flex justify-end"><p class="absolute mr-10 -mt-8 font-bold text-xl text-red-600" href="">S/.180</p><p class="-mt-2 mr-2 font-normal text-sm line-through text-red-400">S/.200</p></div>
            </div>
            <div class="mt-10 border w-64 h-96 rounded-md">
                <img class="hover:scale-105 transition-transform ease-in-out w-screen rounded-md h-60" src="{{asset("Imgs/Lima.webp")}}" alt="">
                <h1 class="text-center p-1 font-bold hover:underline cursor-pointer">Lima</h1>
                <p class="pl-5 font-extralight text-sm">La Ciudad de los Reyes</p>
                <p class="text-center pt-1 cursor-pointer text-green-600 hover:text-green-700">✓ Perfecto para Vacacionar</p>
                <div class="hover:scale-105 transition-transform ease-in-out bg-blue-600 p-2 pt-1 pb-1 font-semibold text-white rounded-sm flex justify-center items-center ml-5 mt-3 w-24">
                    <i class="fa-solid fa-ticket hover:-rotate-45 transition-transform ease-in-out"></i>
                    <a class="ml-2" href="">Pasajes</a> 
                </div>
                <div class="flex justify-end"><p class="absolute mr-10 -mt-8 font-bold text-xl text-red-600" href="">S/.180</p><p class="-mt-2 mr-2 font-normal text-sm line-through text-red-400">S/.200</p></div>
            </div>
        </div>
    </div>
</body>
@endsection 