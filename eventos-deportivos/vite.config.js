import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/content.css',
                'resources/css/welcome.css',
                'resources/css/app.css',
            'resources/css/app.css',
            'resources/js/app.js'],
            refresh: true,
        }),
    ],
});
