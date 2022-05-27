let mix = require('laravel-mix');
let browserSync = require("browser-sync").create();

mix.js('src/app.js', 'public/js')
    .postCss('src/css/main.css', 'css', [
        require('tailwindcss'),
    ])
mix.copy([
    'src/html/**',
], 'public/')
    .setPublicPath('public');
browserSync.init({
    watch: true,
    server: "./public"
})
