import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/css/header.css',
                'resources/css/footer.css',
                'resources/css/register.css',
                'resources/css/login.css',
                'resources/css/searchbar.css',
                'resources/css/listing-card.css',
                'resources/css/flash-messages.css',
                'resources/css/listing-details.css',
                'resources/js/app.js',
            ],
            refresh: true,
        }),
    ],
});