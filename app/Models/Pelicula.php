<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Pelicula extends Model
{
    use HasFactory;
    public static function getTodoPeliculas($id){
        $data = DB::select("call usp_getVerPeliculas(?)", [$id]);
        return $data;
    }
    public static function getPelicula($id){
        $data = DB::select("call usp_getPelicula(?)",[$id]);
        return $data;
    }
    
}

