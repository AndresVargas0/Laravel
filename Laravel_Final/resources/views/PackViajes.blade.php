@extends('layouts.NavAdmin')
@section('Pack_Viajes')
<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
@vite('resources/css/admin.css')
<body>
    <div class="caja-cards">
        @foreach ($destinos as $datos)
            <div class="card">
                <img class="img-card" src="{{asset('Imgs/Huanuco.jpg')}}" alt="">
                <div>
                    <div class="card-content">
                        <h1 class="card-title text-base font-bold hover:underline">{{$datos->title}}</h1>
                        <p class="font-extralight text-sm">{{$datos->ubication}}</p>
                        <p class="text-sm text-green-700">✓{{$datos->content}}</p>   
                        <div class="card-precio">
                            <p class="text-base font-semibold text-red-600">S/.{{$datos->price - $datos->discount}}</p>
                            <p class="text-sm line-through text-red-500">S/.{{$datos->price}}</p>
                        </div> 
                        <div class="btns">
                            <button class="button-editar hover:scale-105 transition-transform ease-in-out font-mono my-2">Editar</button>
                            <button class="button-eliminar hover:scale-105 transition-transform ease-in-out font-mono">Eliminar</button>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
<script>
    function myAccFunc() {
    var x = document.getElementById("demoAcc");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
        x.previousElementSibling.className += " w3-green";
    } else { 
        x.className = x.className.replace(" w3-show", "");
        x.previousElementSibling.className = 
        x.previousElementSibling.className.replace(" w3-green", "");
    }
    }

    function myDropFunc() {
    var x = document.getElementById("demoDrop");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
        x.previousElementSibling.className += " w3-green";
    } else { 
        x.className = x.className.replace(" w3-show", "");
        x.previousElementSibling.className = 
        x.previousElementSibling.className.replace(" w3-green", "");
    }
    }
</script>
</body>
</html>
@endsection