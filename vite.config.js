import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
// import svgSpritemap from 'vite-plugin-svg-spritemap';



export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js', 'resources/scss/editor.css'],
            refresh: true,
        }),
    ],
    // plugins: [
    //     svgSpritemap({
    //       // specify the path to your SVG files
    //       glob: 'resources/svg/*.svg',
    //       output: 'public/svg/spritemap.svg', // specify the output path for the spritemap
    //     }),
    //   ],
});



