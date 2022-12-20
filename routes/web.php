<?php

use App\Http\Controllers\CineController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PeliculaController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class,"index"]);


Route::controller(CineController::class)->group(function(){
    // primero, nombre que se mostrara en la url, segundo el nombre de la funcion que esta en el Controlador
    Route::get("cine/{id}","cine");
    Route::get("cines","cines");
}) ;
Route::controller(PeliculaController::class)->group(function(){
    Route::get("pelicula/{id}","pelicula");
    Route::get("peliculas/{id}","peliculas");
});