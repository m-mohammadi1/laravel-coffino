const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

// mix.js('resources/js/app.js', 'public/js')
//     .postCss(['resources/css/app.css', ''], 'public/css', [
//         //
//     ]);

mix.scripts([
    'resources/js/front/js/jquery.min.js',
    'resources/js/front/js/bootstrap.min.js',
    'resources/js/front/js/wow.min.js',
    'resources/js/front/js/jquery.isotope.min.js',
    'resources/js/front/js/easing.js',
    'resources/js/front/js/owl.carousel.js',
    'resources/js/front/js/validation.js',
    'resources/js/front/js/jquery.magnific-popup.min.js',
    'resources/js/front/js/enquire.min.js',
    'resources/js/front/js/jquery.stellar.min.js',
    'resources/js/front/js/jquery.plugin.js',
    'resources/js/front/js/typed.js',
    'resources/js/front/js/jquery.countTo.js',
    'resources/js/front/js/jquery.countdown.js',
    'resources/js/front/js/designesia.js'
], 'public/front/js/all.js');

mix.styles([
    'resources/css/front/css/bootstrap.min.css',
    'resources/css/front/css/bootstrap-grid.min.css',
    'resources/css/front/css/bootstrap-reboot.min.css',
    'resources/css/front/css/animate.css',
    'resources/css/front/css/owl.carousel.css',
    'resources/css/front/css/owl.theme.css',
    'resources/css/front/css/owl.transitions.css',
    'resources/css/front/css/magnific-popup.css',
    'resources/css/front/css/jquery.countdown.css',
    'resources/css/front/css/style.css',
    'resources/css/front/css/rtl.css',
    'resources/css/front/css/colors/scheme-02.css',
    'resources/css/front/css/coloring.css'
], 'public/front/css/all.css');