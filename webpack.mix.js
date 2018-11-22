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


   mix.scripts([
    'resources/assets/js/jquery.min.js',
    'resources/assets/js/jquery-ui.min.js',
    'resources/assets/js/bootstrap.bundle.min.js',
    'resources/assets/js/all.js',
    'resources/assets/js/adminlte.min.js',
    'resources/assets/js/vue.js', 
    'resources/assets/js/vuetify.js',
    'resources/assets/js/axios.js',
    ],'public/js/app.js')
    .styles([
        'resources/assets/css/bootstrap.css',
        'resources/assets/css/fuentes.css',
        'resources/assets/css/font-awesome.min.css',
        'resources/assets/css/adminlte.css',
        'resources/assets/css/vuetify.min.css',
        'resources/assets/css/ionicons.min.css',
        'resources/assets/css/all.css'
    ],'public/css/app.css');
