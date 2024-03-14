const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
    .vue()
    .sass('resources/sass/app.scss', 'public/css')
    .sourceMaps()
    .postCss("resources/css/app.css", "public/css", [
        require("tailwindcss"),
    ])
    // Copy Flowbite CSS and JavaScript files
    .copy('node_modules/flowbite/dist/flowbite.min.css', 'public/css')
    .copy('node_modules/flowbite/dist/flowbite.min.js', 'public/js')
    // Vue Loader Configuration
    .webpackConfig({
        module: {
            rules: [
                {
                    test: /\.vue$/,
                    loader: 'vue-loader'
                }
            ]
        }
    });
