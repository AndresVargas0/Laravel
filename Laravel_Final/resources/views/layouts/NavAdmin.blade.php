<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Administrador @yield('title')</title>
        @vite('resources/css/app.css')
        @vite('resources/css/admin.css')
        @vite('resources/js/add_admin.js')
        @vite('resources/css/agregar_destinos.css')
    </head>
    <header class="nav text-lg">
        <div class="flex items-center justify-start">
            <img class="ml-10 w-10 h-10" src="{{asset('Imgs/logo.png')}}" alt="">
            <a class="pl-3 text-xl font-extrabold" href="">ADMINISTRADOR</a>
        </div>
        <div class="p-4 justify-end">
            <a class="ml-4 mr-4" href="{{route('datos')}}"><i class="fa-solid fa-user-gear text-xl hover:scale-125 transition-transform ease-in-out"></i></a>
            <a class="ml-4 mr-4" id="showModalButton"><i class="fa-solid fa-circle-plus text-xl hover:scale-125 transition-transform ease-in-out"></i></a>
            <a class="ml-4 mr-4" href="{{route('forms')}}"><i class="fa-solid fa-door-open text-xl hover:scale-125 transition-transform ease-in-out"></i></a>
        </div>
    </header>
    <body>
        <div class="sidebar" style="min-width:225px;">
            <div class="flex flex-col items-center">
                <img class="img-admin h-52 w-52 p-5" src="{{asset('Imgs/perfil.jfif')}}" alt="">
                <h3 class="name-admin flex text-center -mt-2 font-semibold">Nolberth Vargas Esquivel</h3>
            </div>
            <div class="links">
                <a href="" class="link hover:bg-slate-600 hover:font-semibold hover:text-white">Perfiles de Usuarios</a>
                <a href="{{route('datos')}}" class="link hover:bg-slate-600 hover:font-semibold hover:text-white">Paquetes de Viajes</a>
                {{-- <a href="{{route('datos')}}" class="link hover:bg-green-600 hover:font-semibold hover:text-white">ver</a> --}}
            </div>
        </div>
        @yield('Pack_Viajes')
        <div class="modal" id="myModal">
            <div class="modal-content">
                <form action="{{route('destino.create')}}" class="flex justify-evenly" method="POST" enctype="multipart/form-data">
                @csrf
                    <div class="text-sm flex justify-evenly">
                        <div class="img-destino mt-10 flex flex-col">
                            <div class="form-group">
                                <label for="image">Imagen de Referencia:<br></label>
                                <input class="text-transparent" type="file" name="image" id="image" accept="image/*">
                            </div>
                            <img id="preview-image" src="#" alt="Imagen de Destino" class="mr-10 my-5" style="display: none; width: 320px; height: 320px;">
                        </div>
                        <div class="agregar-destinos">
                            <h1 class="text-xl font-semibold">Agregar Destino</h1>
                            <div class="flex flex-col">
                                <label class="py-1 ml-2 text-base" for="">Lugar</label>
                                <input class="border h-8 pl-2 font-light rounded-md" type="text" id="title" name="title" placeholder="Nombre del Destino">
                            </div>
                            <div class="flex flex-col">
                                <label class="py-1 ml-2 text-base" for="">Ubicacion del Destino</label>
                                <input class="border h-8 pl-2 font-light rounded-md" type="text" id="ubication" name="ubication" placeholder="Ubicacion">
                            </div>
                            <div class="flex flex-col">
                                <label class="py-1 ml-2 text-base" for="">Contenido del Paquete</label>
                                <input class="border h-8 pl-2 font-light rounded-md" type="text" id="content" name="content" placeholder="Contenido del Paquete">
                            </div>
                            <div class="flex flex-col">
                                <label class="py-1 ml-2 text-base" for="">Precio</label>
                                <input class="border h-8 pl-2 font-light rounded-md" type="number" name="price" id="price" placeholder="Precio">
                            </div>
                            <div class="flex flex-col">
                                <label class="py-1 ml-2 text-base" for="">Descuento</label>
                                <input class="border h-8 pl-2 font-light rounded-md" type="number" name="discount" id="discount" placeholder="Descuento">
                            </div>
                            <div class="btns text-lg font-light">
                                <button type="submit" class="btn-agregar hover:scale-105 transition-transform ease-in-out">Agregar</button>
                                <button onclick="close()" class="btn-cancelar hover:scale-105 transition-transform ease-in-out">Cancelar</button>
                            </div>
                        </div>  
                    </div>
                </form>
            </div>
        </div>
        <script src="https://kit.fontawesome.com/880d240d27.js" crossorigin="anonymous"></script>
        <script>
            document.getElementById('image').addEventListener('change', function() {
                const previewImage = document.getElementById('preview-image');
                const fileInput = this;
        
                if (fileInput.files && fileInput.files[0]) {
                    const reader = new FileReader();
        
                    reader.onload = function(e) {
                        previewImage.src = e.target.result;
                        previewImage.style.display = 'block';
                    }
        
                    reader.readAsDataURL(fileInput.files[0]);
                } else {
                    previewImage.src = '';
                    previewImage.style.display = 'none';
                }
            });
        </script>
    </body>
</html>