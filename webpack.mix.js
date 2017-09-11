let mix = require('laravel-mix');

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

mix.js('resources/assets/js/app.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css')
   .styles([
    'public/css/combine/bootstrap.min.css',
    'public/css/combine/font-awesome.min.css',
    'public/css/combine/zabuto_calendar.min.css',
    'public/css/combine/owl.carousel.min.css',
    'public/css/combine/elegant-fonts.css'
], 'public/css/rest.css');
