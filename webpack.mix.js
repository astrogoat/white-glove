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
 | -----------------------------------------------
 | HOW TO USE IN YOUR STRATA CONSUMING APPLICATION
 | -----------------------------------------------
 | Using your view with mix('css/white-glove.css', 'vendor/white-glove')
 | Be sure to publish your assets first, see docs for more information
 | https://docs.3zbrands.dev/strata/index/assets-and-resources#publishing-your-assets
 |
 */

// mix
    // .postCss('resources/css/white-glove.css', 'css', [require('tailwindcss')('tailwind.config.js')])
    // .js('resources/js/white-glove.js', 'js')
    // .version()
    // .setPublicPath('public/')
