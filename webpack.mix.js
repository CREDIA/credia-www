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

mix.js('resources/assets/js/app.js', 'public/js').react()
   .js('resources/assets/smm/js/main.js','public/smms/js').react()
   .copy('resources/assets/smm/js/components/wizard.css','public/smms/css')
   .sass('resources/assets/sass/app.scss', 'public/css');
