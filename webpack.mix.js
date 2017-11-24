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
        'node_modules/gentelella/vendors/bootstrap/dist/css/bootstrap.min.css',
        'node_modules/gentelella/vendors/font-awesome/css/font-awesome.min.css',
        'node_modules/gentelella/vendors/nprogress/nprogress.css',
        'node_modules/gentelella/vendors/dropzone/dist/min/dropzone.min.css',
        'node_modules/gentelella/build/css/custom.min.css',
    ], 'public/css/admin.css')
    .js([
        'node_modules/gentelella/vendors/bootstrap/dist/js/bootstrap.min.js',
        'node_modules/gentelella/vendors/fastclick/lib/fastclick.js',
        'node_modules/gentelella/vendors/nprogress/nprogress.js',
        'node_modules/gentelella/vendors/dropzone/dist/min/dropzone.min.js',
        'node_modules/gentelella/build/js/custom.min.js',
    ], 'public/js/admin.js')
