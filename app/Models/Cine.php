<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


// controlaremos las consultas en la base de datos 
class Cine extends Model
{
    use HasFactory;

    public static function getCine($id){
        $data = DB::select("call usp_getCine(?)", [$id]);
        return $data;
    }
    public static function getTodoCines(){
        $data = DB::select("call usp_getVerCines()");
        return $data;
    }
    public static function getCineTatifa($id){
        $data = DB::select("call usp_getCineTarifas(?)",[$id]);
        return $data;
    }
    public static function getCinePelicula($id){
        $data = DB::select("call usp_getCinePeliculas(?)",[$id]);
        return $data;
    }

}
