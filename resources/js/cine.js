'use strict';

import { Practica } from './practica.js';


const Cine = (() => {
    let numerodos = 0;

    var nuevo = new Practica();

    const nuevaFuncion = function () {
        console.log(nuevo.metodo());
    }
    return {
        miMetodo: function () {
            nuevo.segunodMetodo();
            nuevaFuncion();
        }

    }
})();


Cine.miMetodo();


