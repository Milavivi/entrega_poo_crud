import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
<<<<<<< HEAD
=======
import tailwindcss from '@tailwindcss/vite';
>>>>>>> 3b157a2a34b724fd8ecadfdccc93d3fcf52b3b4e

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
<<<<<<< HEAD
=======
        tailwindcss(),
>>>>>>> 3b157a2a34b724fd8ecadfdccc93d3fcf52b3b4e
    ],
});
