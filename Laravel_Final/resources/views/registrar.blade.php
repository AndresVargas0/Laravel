@vite('resources/css/app.css')
@extends('layouts.navlog')
@section('login')
Registrarse
@endsection
@section('contenedor')
    <div class="shadow-xl text-center mt-20 w-96 m-auto p-8 border rounded-xl">
        <h1>Iniciar Sesion</h1>
            <h2 class="p-1 text-start font-normal">Correo</h2>
            <input class="w-80 border p-1 font-light" type="string" placeholder="Email">
            <h2 class="p-1 text-start font-normal">Contraseña</h2>
            <input class="w-80 border p-1 font-light" type="string" placeholder="Contraseña">
            <a class="text-white bg-sky-700 p-2 flex justify-center w-36 m-auto rounded-lg mt-5 -mb-1 hover:scale-105 transition-transform ease-in-out" href="/content">Inicia Sesion</a>
            <span class="border mt-6 text-black flex"></span>
            <a class="flex justify-center mt-2 -mb-4 m-auto hover:underline hover:text-gray-700" href="{{route('createcount')}}">Crear Cuenta</a>
        </div>
@endsection