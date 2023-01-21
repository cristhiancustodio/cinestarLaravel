@extends('base.plantilla');

@section('titulo',"Peliculas")
    
@section('contenido')
    



    <div class="contenido-interno">
        <br><h1>Cartelera</h1><br>
        
        <div class="contenido-pelicula">
            <div class="datos-pelicula">
                
                <h2>{{$pelicula[0]->Titulo}}</h2>
               
                <p>{{$pelicula[0]->Sinopsis}}</p>
                <br>
                <div class="tabla">
                    <div class="fila">
                        <div class="celda-titulo">Título Original :</div>
                        <div class="celda">{{$pelicula[0]->Titulo}}</div>
                    </div>
                    <div class="fila">
                        <div class="celda-titulo">Estreno :</div>
                        <div class="celda">{{$pelicula[0]->FechaEstreno}}</div>
                    </div>
                        <!--Verificar aqui con el genero-->
                    <div class="fila">
                        <div class="celda-titulo">Género :</div>
                        <div class="celda">{{$pelicula[0]->Generos}}</div>
                        <!--<div class="celda">Aventura / Acción</div>-->
                    </div>
                    <div class="fila">
                        <div class="celda-titulo">Director :</div>
                        <div class="celda">{{$pelicula[0]->Director}}</div>
                    </div>
                    <div class="fila">
                        <div class="celda-titulo">Reparto :</div>
                        <div class="celda">{{$pelicula[0]->Reparto}}</div>
                    </div>
                </div>
            </div>
            <img src="{{asset('img/pelicula/'.$pelicula[0]->idPelicula.'.jpg')}}" width="160" height="226"><br><br>
        </div>
        <div class="pelicula-video">
            <!-- <iframe width="580" height="400" src="http://www.youtube.com/v/6maujJFcuxA" frameborder="0" allowfullscreen></iframe> -->
            <embed src="http://www.youtube.com/v/{{$pelicula[0]->Link}}" type="application/x-shockwave-flash" allowscriptaccess="always" allowfullscreen="true" width="580" height="400">
        </div>

    </div>
    @endsection