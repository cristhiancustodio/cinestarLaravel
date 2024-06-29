import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css', 
                'resources/js/app.js',
                'resources/js/impresion/impresion.js'
            ],
            refresh: true,
        }),
    ],
    server: {
        port: 3001, // Cambia esto al puerto que desees
        hmr: {
            host: 'localhost',
        },
    },
});
