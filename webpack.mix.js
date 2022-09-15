let mix = require('laravel-mix');
let browserSync = require("browser-sync").create();

mix.js('src/app.js', 'public/js')
    .postCss('src/css/main.css', 'css', [
        require('tailwindcss'),
    ])
mix.copy([
    'src/html/*.php',
], 'public/')
    .copyDirectory('src/html/partials','public/partials')
    .copy('src/img/**','public/img')
    .setPublicPath('public')
    .browserSync({
        watch: true,
        files:[
            'public/css/main.css',
            'public/js/app.js',
            'public/*.php',
            'img/**/*',
        ],
        proxy: 'http://workapp.test/',
        host:'workapp.test',
        open: 'external',
        // server: "./public"
    }).disableSuccessNotifications();