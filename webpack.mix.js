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

mix.js('resources/js/app.js', 'public/js')
    .combine(['resources/js/wysibb/jquery1.11.0.min.js',
            'resources/js//wysibb/jquery.wysibb.js',
            'resources/js/wysibb/wysibb.fr.js'],
        'public/js/wysibb.js')
    .copy('resources/js/swf/swfobject.js', 'public/js/swf')
    .copy('resources/js/jquery/jquery.min.js', 'public/js/jquery')
    .js('resources/js/background.js', 'public/js')
    .js('resources/js/canvas/login.js', 'public/js/canvas')
    .js('resources/js/canvas/faq_gandalf.js', 'public/js/canvas')
    .js('resources/js/forum.js', 'public/js')
    .minify('resources/js/game.js', 'public/js/game.js')
    .sass('resources/sass/app.scss', 'public/css')
    .sass('resources/sass/pages/_index.scss', 'public/css/pages')
    .sass('resources/sass/pages/_forum.scss', 'public/css/pages')
    .sass('resources/sass/pages/_account.scss', 'public/css/pages')
    .sass('resources/sass/pages/_team.scss', 'public/css/pages')
    .sass('resources/sass/pages/_shop.scss', 'public/css/pages')
    .sass('resources/sass/pages/_games.scss', 'public/css/pages')
    .sass('resources/sass/pages/_game.scss', 'public/css/pages')
    .sass('resources/sass/pages/_community.scss', 'public/css/pages')
    .sass('resources/sass/pages/_artwork.scss', 'public/css/pages')
    .copy(
        'node_modules/@fortawesome/fontawesome-free/webfonts',
        'public/webfonts'
    )
    .sourceMaps();
