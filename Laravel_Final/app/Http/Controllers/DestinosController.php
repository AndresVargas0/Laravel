<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Destinos;

class DestinosController extends Controller
{
    public function index()
    {
        return view('layouts.NavAdmin');
    }

    public function store(Request $request)
    {
        /* dd($request->all()); */
        $request->validate([
            'image' => 'required|image|max:2048',
            'title' => 'required|string',
            'ubication' => 'required|string',
            'content' => 'required|string|max:255',
            'price' => 'required|numeric',
            'discount' =>'required|numeric'   
        ]);

        $imagePath = $request->file('image')->store('public/Imgs/');

        Destinos::create([
            'image' => $imagePath,
            'title' => $request-> title,
            'ubication'=> $request-> ubication,
            'content' => $request -> content,
            'price' => $request -> price,
            'discount' => $request -> discount, 
        ]);
        
        return redirect()->route('datos');
    }
}