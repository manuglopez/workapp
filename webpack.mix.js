let mix = require('laravel-mix');
let browserSync = require("browser-sync").create();

mix.js('src/app.js', 'public/js')
    .postCss('src/css/main.css', 'css', [
        require('tailwindcss'),
    ])
mix.copy([
    'src/html/**',
], 'public/')
    .copy('src/img/**','public/img')
    .setPublicPath('public')
    .browserSync({
        watch: true,
        proxy: 'http://workapp.test',
        // server: "./public"
    });