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

mix.sass('resources/assets/sass/style.scss', 'public/css')
    .styles([
        'resources/assets/combine/css/bootstrap.min.css',
        'resources/assets/combine/css/datepicker.css',
        'resources/assets/combine/css/fileinput.min.css',
        'resources/assets/combine/css/jquery.datepick.css',
        'resources/assets/combine/css/owl.carousel.css',
        'resources/assets/combine/css/owl.transitions.css',
        'resources/assets/combine/css/zabuto_calendar.min.css',
    ], 'public/css/all.css')
    .js('resources/assets/js/maps.js', 'public/js')
    .js('resources/assets/js/custom.js', 'public/js')
    .styles([
        'resources/assets/combine/css/bootstrap.min.css',
    ], 'public/css/admin.css')
    .js('resources/assets/js/maps.js', 'public/js/admin.js')
