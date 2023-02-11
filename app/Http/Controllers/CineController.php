<?php

namespace App\Http\Controllers;

use App\Models\Cine;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
class CineController extends Controller
{
    public function cine($id){
        $cines = Cine::getCine($id);
        $cine_tarifa = Cine::getCineTatifa($id);
        $cine_pelicula = Cine::getCinePelicula($id);
        return view("cine", ["cines"=>$cines,"cine_tarifa"=>$cine_tarifa,"cine_pelicula"=>$cine_pelicula]);
    }
    public function cines(){
        $cines = Cine::getTodoCines();
        return view("cines",compact("cines"));
    }
}
