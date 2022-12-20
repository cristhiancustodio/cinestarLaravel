@extends('base.plantilla')

@section('titulo',"Cines")

@section('contenido')





<div class="contenido-interno">
    <br>
    <h1>Nuestros Cines</h1><br>
    @foreach ($cines as $item)
    <div class="contenido-cine">
        <img src="img/cine/{{$item->idCine}}.1.jpg" width="227" height="170">
        <div class="datos-cine">
            <h4>{{$item->RazonSocial}} </h4><br>
            <span>{{$item->Direccion}} <br><br>{{$item->Telefonos}} </span>
        </div>
        <br>
        <a href= {{url("cine/".$item->idCine)}} >
            <img src="img/varios/ico-info2.png" width="150" height="40">
        </a>
    </div>
    @endforeach
</div>
@endsection