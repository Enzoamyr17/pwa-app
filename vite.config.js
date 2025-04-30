import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
    server: {
        host: '0.0.0.0',           // <-- OK na ito
        port: 5173,                // <-- OK na rin
        strictPort: true,
        allowedHosts: 'all',        // <-- OK
        cors: true,                 // <-- OK
        hmr: {
            host: '192.168.1.11',  // <-- VERY IMPORTANT bro!! Your laptop's IP address
            protocol: 'http',
        },
    },
});
