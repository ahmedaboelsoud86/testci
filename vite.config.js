import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from "@vitejs/plugin-vue"; //add this line

export default defineConfig({
    plugins: [
        vue(),
        laravel({
            input: [
                'resources/js/app.js',
            ],
            refresh: true,
        }),
    ],
    server: {
        host: '172.19.0.3',
        port: '3000',
        open: false,
     }
    
 
});


