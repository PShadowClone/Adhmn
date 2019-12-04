let mix = require('laravel-mix');

mix.setPublicPath(path.normalize('public/assets'))
    .less('resources/assets/website/less/website.less', 'css/style.css')
    .options({
        processCssUrls: false
    }).js('resources/assets/website/js/website.js', 'js/global.js')