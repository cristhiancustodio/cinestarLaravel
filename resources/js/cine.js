'use strict';

import { Practica } from './practica.js';

class Cines{


    constructor(){
        this.practica = new Practica();
    }

    nuevaFuncion(){
        console.log(this.practica.metodo());
    }

    miMetodo(){
        this.practica.segunodMetodo();
        this.nuevaFuncion();
    }
}


(new Cines()).miMetodo();


