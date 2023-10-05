<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    //
    public function store(Request $request){
        $this->validate($request, [
            'email' => 'required',
            'password' => 'required',
        ]);
        if (!auth()->attempt($request->only('email', 'password'), $request->remember)) {
            return back()->with('mensaje', 'Credenciales Incorrectas');
        }
        elseif (auth()->user()->email === 'Admin@gmail.com') {
            return redirect()->route('admin');
        }
        return redirect()->route('home');
    }
}