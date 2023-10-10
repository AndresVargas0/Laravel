<?php

namespace App\Http\Controllers;

use App\Models\Destinos;

class DatosController extends Controller
{

    public function index()
    {
        $destinos = Destinos::all();

        return view('packviajes', compact('destinos'));
       //dd($destinos);
    }
}