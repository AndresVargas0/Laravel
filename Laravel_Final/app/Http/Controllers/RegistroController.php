<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class RegistroController extends Controller
{
    //
    public function store(Request $request){
        $this->validate($request, [
            'username'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'required|confirmed'
        ]);
        User::create([
            'username' => $request->username,
            'email'=> $request->email,
            'password'=>Hash::make($request->password)
        ]);
        auth()->attempt([
            'email'=> $request->email,
            'password'=>$request->password
        ]);
        return redirect()->route('home');
    }
}
