<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class LoginController extends Controller
{
    //
    public function store(Request $request){
        $this->validate($request, [
            'email'=>'required',
            'password'=>'required'
        ]);
        if(!auth()->attempt($request->only('email','password'), $request->remember)){
            return back()->with('mensaje','Credenciales Incorrectas');
        }
        return redirect()->route('home');
    }
}