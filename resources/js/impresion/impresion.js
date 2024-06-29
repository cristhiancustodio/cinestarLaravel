"use strict"


class Impresion {
    hoja = '';
    numero_hoja = 0;
    contador = 0;
    altura_maxima = 0;
    constructor(altura_maxima) {
        this.altura_maxima = altura_maxima;
    }
    crearNuevaHoja() {
        this.numero_hoja++;
        let nueva_hoja = `
        <div class="page-brake" style="margin-top:50px" >
            <div class="wraper">
                <div class="content">
                    <table width="1000" align="center" class="hoja-vertical nueva_hoja${this.numero_hoja}">
                        <tr>
                            <td id="elementos_nuevos${this.numero_hoja}" >
                                <table id="elemento_principal${this.numero_hoja}" width="100%" >

                                </table>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>`;
        this.hoja = `nueva_hoja${this.numero_hoja}`;
        $("#div_padre").append(nueva_hoja);
    }

    verificarDondeCortar(){
        const filas_tablas = document.querySelectorAll(".tr_principal");
        let altura = 0
        let lista_filas_clonar = [];
        filas_tablas.forEach(element => {
            if(altura > this.altura_maxima){
                lista_filas_clonar.push(element.getAttribute('id'));
            }
            altura += element.clientHeight;
        });
        return lista_filas_clonar;
    }


    alturaCabecera(){
        return document.getElementById("cabecera").clientHeight;
    }
    alturaFooter(){
        return document.getElementById("footer").clientHeight;
    }
    alturaTablaHistoria(){
        return document.getElementById("tabla_principal").clientHeight;
    }

    alturaFilasPrincipales(){
        const filas_tablas = document.querySelectorAll(".tr_principal");
        let altura_total = 0;
        filas_tablas.forEach(element => {
            altura_total += element.clientHeight;
        });
        return altura_total;
    }
    calcularAnchoMaximo(){
        let ancho_maximo = 0;
        ancho_maximo = this.alturaCabecera() + this.alturaTablaHistoria() + this.alturaFooter();
        return ancho_maximo;
    }

    verificarSiCorta(){
        if(this.calcularAnchoMaximo() > 660){
            this.modificarImpresion();
        }
    }
    
    modificarImpresion(){
        let lista_clonar = this.verificarDondeCortar();
        if(lista_clonar.length !== 0){
            document.getElementById("div_padre").style.display = '';
            this.crearNuevaHoja();
            this.clonarElementoPrimero("cabecera", ("elementos_nuevos" + this.numero_hoja));            
            lista_clonar.forEach(idfila => {
                this.clonarElementoAlFinal(idfila, ("elemento_principal" + this.numero_hoja));

                document.getElementById(idfila).remove();
            });

            this.clonarElementoAlFinal("footer", ("elementos_nuevos" + this.numero_hoja));
        }
    }

    #clonarElemento(elemento_clonar, destino, final = true){
        if(document.getElementById(elemento_clonar) != null || document.getElementById(destino) != null){

            let fila = document.getElementById(elemento_clonar);
            let clon = fila.cloneNode(true);
            let elemento_destino = document.getElementById(destino);
            if(final == true){
                elemento_destino.appendChild(clon);
            }else{
                elemento_destino.insertBefore(clon, elemento_destino.firstChild);
            }
        }
    }
    clonarElementoAlFinal(elemento_clonar, destino) {
        this.#clonarElemento(elemento_clonar, destino);
    }

    clonarElementoPrimero(elemento_clonar, destino){
        this.#clonarElemento(elemento_clonar, destino, false);
    }


}
const impresion = new Impresion(1300);
// impresion.elemento("cabecera");
// impresion.elemento("cabecera2");
// impresion.elemento("tabla");
// impresion.elemento("footer");
impresion.verificarSiCorta();
