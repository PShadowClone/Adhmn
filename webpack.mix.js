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

mix.js('resources/js/admin/app.js', 'public/js')
    .js('resources/js/landing_page/app.js', 'public/js/landing_page')
    .sass('resources/sass/app.scss', 'public/css')
;

// mix.options({extractVueStyles: true });


/**
 *  create new alias
 *
 *  @author Amr
 */
mix.webpackConfig({
    resolve: {
        alias: {
            '@': path.resolve(__dirname, 'resources/js/admin'),
            '$': path.resolve(__dirname, 'resources/js/landing_page/assets')
        }
    },
});

