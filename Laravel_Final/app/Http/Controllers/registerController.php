<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index(){
        return view('count');
    }

    public function store(Request $request){

        $this->validate($request,[
            'username' => 'required',
            'email' => 'required|unique:users|email',
            'password' => 'required|confirmed|min:4'
        ]);
        
        User::create([
            'username' => $request ->username,
            'email' => $request ->email,
            'password' => Hash::make($request ->password)
        ]);

        auth()->attempt([
            'email'=> $request->email,
            'password'=> $request->password
      ]);
      return redirect()->route('forms', auth()->user()->name); 
    }
}