<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Stmt\Return_;

class Prueba extends Controller
{

    public function index(){
        
        $lista = [
            (object)[
            "numero1" => "22",
            "numero2" => "22",
            "numero3" => "22",
            "numero4" => "22",
          ]
        ];
        $listado = [];
        $listado = array_merge($listado, $lista);
        $listado = array_merge($listado, $lista);
        $listado = array_merge($listado, $lista);
        $listado = array_merge($listado, $lista);
        $listado = array_merge($listado, $lista);
        $listado = array_merge($listado, $lista);
        $listado = array_merge($listado, $lista);
        $listado = array_merge($listado, $lista);
        $listado = array_merge($listado, $lista);
        $listado = array_merge($listado, $lista);
        $listado = array_merge($listado, $lista);
        $listado = array_merge($listado, $lista);
        $listado = array_merge($listado, $lista);
        $listado = array_merge($listado, $lista);
        $listado = array_merge($listado, $lista);
        $listado = array_merge($listado, $lista);
        //dd($listado);
        $meses = "pecesto";
        return view("prueba", compact("listado","meses"));
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

    public function yasminEstuvoAqui(){
        
    }
}
