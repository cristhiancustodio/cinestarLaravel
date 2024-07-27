import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue';

export default defineConfig({
    build: {
        outDir: 'build', // Asegura que los archivos de build se coloquen en 'build'
    },
    plugins: [
        
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
                'resources/js/prueba.js',
            ],
            //publicDirectory: 'public', // Directorio público de Laravel
            buildDirectory: 'build',   // Subdirectorio donde se colocarán los archivos de build

            refresh: true,
        }),
        vue({
            template: {
                transformAssetUrls: {
                    base: '',
                    includeAbsolute: false,
                },
            },
        }),
    ],
    resolve: {
        alias: {
            vue: 'vue/dist/vue.esm-bundler.js',
            '@' : '/resources/js/',
        },
    },
});
