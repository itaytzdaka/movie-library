import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
                'resources/css/genres.css',
                'resources/js/genres.js',
                'resources/css/card.css',
                'resources/css/nav.css',
            ],
            refresh: true,
        }),
        tailwindcss(),
    ],
});
