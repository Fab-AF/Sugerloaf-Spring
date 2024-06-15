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

mix.sass('resources/sass/app.scss', 'public/css/', {
     implementation: require('node-sass')
});
mix.js('resources/js/app.js', 'public/js');
mix.copy('resources/js/toster.js','public/js');
//mix.copy('resources/js/admin/global.js','public/js/admin');
//mix.copyDirectory('resources/js/admin','public/js/admin');