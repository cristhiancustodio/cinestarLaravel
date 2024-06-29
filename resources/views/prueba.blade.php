<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="{{ asset("resources/css/impresion.css") }}">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    @vite(['resources/js/app.js', 'resources/css/app.css'])
</head>

<body>
    <button onclick="window.print()" id="ocultar_imp" >impresion</button>
    <div class="page-brake">
        <div class="wraper">
            <div class="content">
                <table width="1000" align="center" class="hoja-vertical">
                    <tr>
                        <td>
                            <table width="100%" id="cabecera">
                                <tr>
                                    <td class="borde">Titulo principal</td>
                                </tr>
                                <tr>
                                    <td class="borde">Titulo principal</td>
                                </tr>
                                <tr>
                                    <td class="borde">Titulo principal</td>
                                </tr>
                                <tr>
                                    <td class="borde">Titulo principal</td>
                                </tr>
                                <tr>
                                    <td colspan="3" height="10"></td>
                                </tr>
                            </table>

                            <table width="100%" id="tabla_principal" >
                                @foreach ($listado ?? [] as $key => $value)

                                    <tr class="tr_principal" id="fila{{ $key }}" >  
                                        <td class="borde" height="50">{{ $value->numero1 ?? '' }}</td>
                                        <td class="borde" height="50">{{ $value->numero2 ?? '' }}</td>
                                        <td class="borde" height="50">{{ $value->numero3 ?? '' }}</td>
                                        <td class="borde" height="50">{{ $value->numero4 ?? '' }}</td>
                                    </tr>
                                @endforeach

                            </table>



                            <table id="footer" width="100%">
                                <tr>
                                    <td colspan="3" height="10"></td>
                                </tr>
                                <tr>
                                    <td class="borde">
                                        En tu archivo Blade (por ejemplo, resources/views/welcome.blade.php), asegúrate
                                        de incluir las directivas de Vite para cargar tus archivos CSS y JS.
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    
    <div id="div_padre" style="display: none;"></div>



</body>


<script type="module" src="{{ asset("resources/js/impresion/impresion.js")}}"></script>

</html>