<?php

namespace App\Http\Controllers;




use App\Models\Pelicula;
use Illuminate\Http\Request;


// aqui controlaremos las vistas
class PeliculaController extends Controller
{
    // estos parametros se traen de la URL
    public function pelicula($id){
        $pelicula = Pelicula::getPelicula($id);
        return view("pelicula",compact("pelicula"));
    }
    public function peliculas($id){
        $peliculas = Pelicula::getTodoPeliculas($id);
        return view("peliculas",compact("peliculas"));
    }
}
