@extends('base.plantilla')
    
@section('titulo',"Cine")
    
@section('contenido')
    


    
    <div class="contenido-interno">
        <h2>{{$cines[0]->RazonSocial}} </h2>
        <div class="cine-info">
            <div class="cine-info datos">
                <p>{{$cines[0]->Direccion}} </p>
                <p>Teléfono:{{$cines[0]->Telefonos}} </p>
                <br>
                <div class="tabla">
               @foreach ($cine_tarifa as $item)
                   
               
                    <div class="fila">
                        <div class="celda-titulo">{{$item->DiasSemana}} </div>
                        <div class="celda">{{$item->Precio}} </div>
                    </div>
                    @endforeach
                    
                </div>
                <div class="aviso">
                    <p>A partir del 1ro de julio de 2016, Cinestar Multicines realizará el cobro de la comisión de S/. 1.00 adicional al tarifario vigente, a los usuarios que compren sus entradas por el aplicativo de Cine Papaya para Cine Star Comas, Excelsior, Las Américas, Benavides, Breña, San Juan, UNI, Aviación, Sur, Porteño, Tumbes y Tacna.</p>
                </div>
            </div>
            <img src="../img/cine/{{$cines[0]->idCine}}.2.jpg">
            <br><br><h4>Los horarios de cada función están sujetos a cambios sin previo aviso.</h4><br>
            <div class="cine-info peliculas">
                <div class="tabla">
                    <div class="fila">
                        <div class="celda-cabecera">Películas</div>
                        <div class="celda-cabecera">Horarios</div>
                    </div>
                    @foreach ($cine_pelicula as $item)
                        
                    
                    <div class="fila impar">
                        <div class="celda-titulo">{{$item->Titulo}} </div>
                        <div class="celda">{{$item->Horarios}}</div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div>
            <img style="float:left;" src="../img/cine/{{$cines[0]->idCine}}.3.jpg">
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