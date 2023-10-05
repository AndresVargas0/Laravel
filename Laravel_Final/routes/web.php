<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\registerController;
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
Route::post('/crearcuenta',[registerController::class,'store'])->name('count');
Route::post('/login',[LoginController::class,'store'])->name('logincount');

Route::get('/', function () {
    return view('destinos');
})->name('home');

Route::get('panel_admin', function () {
    return view('Admin');
})->name('admin');


Route::get('/crearcuenta', function () {
    return view('crearcuenta');
})->name('count');

Route::get('/content', function () {
    return view('destinos');
});

Route::get('admin', function () {
    return view('Admin');
})->name('admin');