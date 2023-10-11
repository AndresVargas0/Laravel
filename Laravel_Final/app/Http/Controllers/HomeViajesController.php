<?php

namespace App\Http\Controllers;

use App\Models\Destinos;

class HomeViajesController extends Controller
{
    public function index()
    {
        $destinos = Destinos::all();
        
        return view('Home', compact('destinos'));
        // dd($destinos);
    }
}