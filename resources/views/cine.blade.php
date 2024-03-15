@extends('base.plantilla')

@section('titulo',"Cine")

@section('contenido')


<div class="contenido-interno">
    <h2>{{$cines->RazonSocial}} </h2>
    <div class="cine-info">
        <div class="cine-info datos">
            <p>{{$cines->Direccion}} </p>
            <p>Teléfono:{{$cines->Telefonos}} </p>
            <br>
            <div class="tabla">
                <div class="fila">
                    <div class="celda-titulo">{{$cine_tarifa->DiasSemana}} </div>
                    <div class="celda">{{$cine_tarifa->Precio}} </div>
                </div>

            </div>
            <div class="aviso">
                <p>A partir del 1ro de julio de 2016, Cinestar Multicines realizará el cobro de la comisión de S/. 1.00 adicional al tarifario vigente, a los usuarios que compren sus entradas por el aplicativo de Cine Papaya para Cine Star Comas, Excelsior, Las Américas, Benavides, Breña, San Juan, UNI, Aviación, Sur, Porteño, Tumbes y Tacna.</p>
            </div>
        </div>
        <img src="{{ asset('public/img/cine/'.$cines->idCine.'.2.jpg')}}">
        <br><br>
        <h4>Los horarios de cada función están sujetos a cambios sin previo aviso.</h4><br>
        <div class="cine-info peliculas">
            <div class="tabla">
                <div class="fila">
                    <div class="celda-cabecera">Películas</div>
                    <div class="celda-cabecera">Horarios</div>
                </div>

                <div class="fila impar">
                    <div class="celda-titulo">{{$cine_pelicula->Titulo}} </div>
                    <div class="celda">{{$cine_pelicula->Horarios}}</div>
                </div>
            </div>
        </div>
    </div>
    <div>
        <img style="float:left;" src="{{ asset('public/img/cine/'.$cines->idCine.'.3.jpg')}}">
        <span class="tx_gris">Precios de los juegos: desde S/1.00 en todos los Cine Star.<br>
            Horario de atención de juegos es de 12:00 m hasta las 10:30 pm.
            <br> <br>
            Visitános y diviértete con nosotros.
            <br> <br>
            <b>CINESTAR</b>, siempre pensando en tí.
        </span>
    </div>
</div>
@endsection