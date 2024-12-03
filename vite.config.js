import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: 'resources/js/app.js', // Ganti dengan path ke file JS Anda
            refresh: true,
        }),
    ],
    build: {
        outDir: 'public/build', // Pastikan ini sesuai dengan folder output Anda
    },
});