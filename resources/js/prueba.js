import './bootstrap'

import { createApp } from 'vue'
import axios, { Axios } from 'axios';

const prueba = createApp({
    data(){
        return{
            numero : 111,
            finalizado : '',
            lista_empresas : [
                'Empresa A', 
                'Empresa B', 
                'Empresa C',
                'Empresa C',
                'Empresa C',
                'Empresa C',
                'Empresa C',
                'Empresa C',
            ],
            aumento:0,
        }
    },
    mounted(){
        this.selecionar();
    },
    methods : {

        aumentar(){
            this.lista_empresas.push({"Detalle":"mencinado"});
            this.aumento++;
        },


        async selecionar(){
            let resultado = await axios.get("Prueba/seleccionar")
            .then(response => {
                return response.data.resultado;
            }).catch(response => {

            }).finally(()=>{
                this.finalizado = "Exitoso";
            })

            this.lista_empresas = resultado;
        }
    }
}).mount("#prueba");
