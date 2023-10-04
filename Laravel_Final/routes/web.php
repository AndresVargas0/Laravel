<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('destinos');
});

Route::get('/crearcuenta', function () {
    return view('crearcuenta');
})->name('count');

Route::post('/crearcuenta',[LoginController::class,'store'])->name('count');

Route::get('/iniciosesion', function () {
    return view('registrar');
})->name('register');

Route::get('/pr', function () {
    return view('layouts.welcome');
});

Route::get('/content', function () {
    return view('destinos');
});