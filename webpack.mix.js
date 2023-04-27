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

  mix.sass('resources/sass/app.scss', 'public/css')
        .sass('resources/sass/register/index.scss', 'public/css/register')
        .sass('resources/sass/Todo/index.scss', 'public/css/Todo')
        .sass('resources/sass/Todo/create.scss', 'public/css/Todo')
        .sass('resources/sass/Todo/edit.scss', 'public/css/Todo')
        .sass('resources/sass/login/index.scss', 'public/css/login');




mix.js('resources/js/app.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css', [
        //
    ]);
