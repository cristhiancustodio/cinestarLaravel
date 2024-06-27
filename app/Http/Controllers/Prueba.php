<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Stmt\Return_;

class Prueba extends Controller
{

    public function index(){
        
    }
    public function insert(Request $request){

        $detalle = $request->input("detalle");
        $resultado = DB::table("cargo")->insertGetId([
            "Detalle" => $detalle,
        ]);
    }
    public function seleccionar(Request $request)
    {
        $resulado = DB::table("cargo")->select("Detalle")->get();
        return response()->json(["resultado" => $resulado]);
    }


    public function actualizar(Request $request){


        $detalle = $request->input("detalle");
        $id = $request->input("id");

        
        $resultado = DB::table("cargo")
        ->where("idCargo", $id)
        ->update(
            [
                "Detalle" => $detalle,
            ]
        );


        return response()->json([
            "resultado" => $resultado,
        ]);
    }
}
