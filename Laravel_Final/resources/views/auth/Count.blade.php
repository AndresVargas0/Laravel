@extends('layouts.NavHome')
@section('title')
- Cuenta
@endsection
@section('Forms')
@vite('resources/js/datosUser.js')
<head>
    <link type="image/x-icon" sizes="16x16" rel="icon" href="/Imgs/favicon.png">
</head>
<body>
    <div class="flex justify-center bg-green-500 h-screen mt-14">
        <form action="{{route('registercount')}}" method="POST" novalidate>
            @csrf
            <div class="shadow-xl text-center mr-8 mt-14 w-96 p-8 border-2 rounded-xl">
                <h1 class="font-semibold">¿Eres Nuevo?</h1>
                <h2 class="m-1 mt-2 text-start font-semibold">Usuario</h2>
                <input class="font-mono w-80 border p-1 font-light bg-transparent placeholder-white rounded-lg" id="username" name="username" type="string" placeholder="Username" value="{{old('username')}}">
                @error('username')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>
                @enderror
                <h2 class="m-1 mt-2 text-start font-semibold">Correo</h2>
                <input class="font-mono w-80 border p-1 font-light bg-transparent placeholder-white rounded-lg" id="email" name="email" type="email" placeholder="Email" value="{{old('email')}}">
                @error('email')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>
                @enderror
                <h2 class="m-1 mt-2 text-start font-semibold">Contraseña</h2>
                <input class="font-mono w-80 border p-1 font-light bg-transparent placeholder-white rounded-lg" type="password" id="password" name="password" placeholder="Password">
                @error('password')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>
                @enderror
                <h2 class="m-1 mt-2 text-start font-semibold">Confirmacion de Contraseña</h2> 
                <input class="font-mono w-80 border p-1 font-light bg-transparent placeholder-white rounded-lg" type="password" id="password_confirmation" name="password_confirmation" placeholder="Password Confirm">
                @error('password')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>
                @enderror
                <span class="border mt-6 text-black flex"></span>
                <button type="submit" class="text-white bg-sky-700 p-2 flex justify-center m-auto w-40 rounded-lg mt-4 hover:scale-105 transition-transform ease-in-out">Crear Cuenta</button>
            </div>
        </form>
        <form action="{{route('logincount')}}" method="POST">
            @csrf
            <div class="shadow-xl text-center mt-14 w-96 ml-8 p-8 border-2 rounded-xl">
                <h1 class="font-semibold">¿Ya Tienes una Cuenta?</h1>
                <h2 class="m-1 mt-2 bg text-start font-semibold">Correo</h2>
                <input class="font-mono w-80 border bg-transparent placeholder-white p-1 font-light rounded-lg" type="email" id="email" name="email" placeholder="Email">
                @error('email')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>
                @enderror
                <h2 class="m-1 mt-2 bg text-start font-semibold">Contraseña</h2>
                <input class="font-mono w-80 border bg-transparent placeholder-white p-1 font-light rounded-lg" type="password" id="password" name="password" placeholder="Contraseña">
                @error('password')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>
                @enderror
                @if (session('mensaje'))
                <p class="bg-red-500 text-white my-2 font-bold rounded-lg text-sm p-2 text-center">{{session('mensaje')}}</p>                
                @endif
                <span class="border mt-6 text-black flex"></span>
                <button type="submit" class="text-white bg-sky-700 p-2 flex justify-center w-36 m-auto rounded-lg mt-5 -mb-1 hover:scale-105 transition-transform ease-in-out">Inicia Sesion</button>
            </div>
        </form>    
    </div>
</body>
@endsection