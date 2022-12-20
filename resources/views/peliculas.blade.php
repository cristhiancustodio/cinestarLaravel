@extends('base.plantilla')

@section('titulo',"Peliculas")
@section('contenido')
    

    <div class="contenido-interno">
        <br><h1>Cartelera</h1><br>
        
        @foreach ($peliculas as $item)
            
        
        <div class="contenido-pelicula">
            <div class="datos-pelicula">
                <h2>{{$item->Titulo}} </h2><br>
                <p>{{$item->Sinopsis}} </p>
                <br>
                   <div class="boton-pelicula"> 
                       <a href={{url("pelicula/".$item->idPelicula)}} >
                           <img src="{{asset('img/varios/btn-mas-info.jpg')}}" width="120" height="30" alt="Ver info">
                       </a>
                   </div>
                   <div class="boton-pelicula"> 
                       <a href="http://www.cinestar.com.pe/popups/trailer/v3fspveODBI" onclick="return hs.htmlExpand(this, { objectType: 'iframe' } )" >
                           <img src="{{asset('img/varios/btn-trailer.jpg')}}" width="120" height="30" alt="Ver trailer">
                       </a>
                </div> 
            </div>
            <img src="{{asset('img/pelicula/'.$item->idPelicula.'.jpg')}}" width="160" height="226"><br><br>
        </div>
        @endforeach
    </div>
    @endsection