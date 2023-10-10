<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\registerController;
use App\Http\Controllers\DestinosController;
use App\Http\Controllers\DatosController;
use App\Http\Controllers\HomeViajesController;
use Illuminate\Support\Facades\Route;

Route::get('/register',[RegisterController::class,'index'])->name('registercount');
Route::post('/register',[RegisterController::class,'store']);

Route::get('/login',[LoginController::class,'index'])->name('logincount');
Route::post('/login',[LoginController::class,'store']);

Route::get('/destinos',[DestinosController::class,'index'])->name('destino.create');
Route::post('/destinos',[DestinosController::class,'store']);

Route::get('/datos',[DatosController::class, 'index'])->name('datos');

Route::get('/datoshome',[HomeViajesController::class, 'index'])->name('datos.home');

Route::get('/', function () {return view('Home');})->name('home');

Route::get('/count', function() {return view('auth.Count');})->name('forms');

// Route::get('/pack_viajes', function() {return view('PackViajes');})->name('pack.viajes');    

// Route::get('/admin', function () {return view('Admin'); })->name('admin');