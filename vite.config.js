// import { defineConfig } from 'vite';
// import laravel from 'laravel-vite-plugin';
// import tailwindcss from '@tailwindcss/vite';

// export default defineConfig({
//     plugins: [
//         laravel({
//             input: ['resources/css/app.css', 'resources/js/app.js'],
//             refresh: true,
//         }),
//         tailwindcss(),
//     ],
// });


import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import react from '@vitejs/plugin-react'; // important to put this here

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/js/Test.jsx',
                'resources/js/Movie/CreateMovie.jsx',
                'resources/js/Movie/EditMovie.jsx',
                'resources/js/Serie/CreateSerie.jsx',
                'resources/js/Serie/EditSerie.jsx',
                //for website component
                'resources/js/Web/Movie.jsx'
            ],
            refresh: true,
        }),
        react(),
    ],
});