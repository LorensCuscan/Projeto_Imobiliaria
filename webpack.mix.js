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

mix
.styles([
    'resources/views/front/assets/css/animate.css',
    'resources/views/front/assets/css/icomoon.css',
    'resources/views/front/assets/css/bootstrap.css',
    'resources/views/front/assets/css/magnific-popup.css',
    'resources/views/front/assets/css/owl.carousel.min.css',
    'resources/views/front/assets/css/owl.theme.default.min.css',
], 'public/front/assets/css/vendor.css')

