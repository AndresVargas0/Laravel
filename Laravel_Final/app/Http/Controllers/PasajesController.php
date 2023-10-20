<?php

namespace App\Http\Controllers;

use App\Models\Destinos;
use Illuminate\Http\Request;
use App\Models\Pasajes;

class PasajesController extends Controller
{
    public function index()
    {
        return view('layouts.NavHome');
    }

    public function store(Request $request)
    {
        /* dd($request->all()); */
            $request->validate([
                'dni' => 'required|min:8',
                'name' => 'required|string',
                'email' => 'required|string',
                'phone' => 'numeric|min:9',
                'destino' => 'string',
                'ubication' => 'string',
                'price' => 'required|numeric',
            ]);
    
            Pasajes::create([
                'dni' => $request-> dni,
                'name'=> $request-> name,
                'email' => $request -> email,
                'phone' => $request -> phone,
                'destino' => $request -> destino,
                'ubication' => $request -> ubication,
                'price' => $request -> price,
            ]);
            
            return redirect()->route('pasajescreate');
    }
}
