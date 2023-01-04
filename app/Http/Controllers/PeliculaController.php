<?php

namespace App\Http\Controllers;




use App\Models\Pelicula;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;

// aqui controlaremos las vistas
class PeliculaController extends Controller
{
    // estos parametros se traen de la URL
    public function pelicula($id){
        $pelicula = Pelicula::getPelicula($id);
        return view("pelicula",compact("pelicula"));
    }
    public function peliculas($id){
        if($id == 1 or $id == 2){
            $peliculas = Pelicula::getTodoPeliculas($id);
            return view("peliculas",compact("peliculas"));
        }
        else{
            //redireccionar
            return redirect()->to("/peliculas/2");
        }
        
    }
}
