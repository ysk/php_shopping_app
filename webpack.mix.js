const mix = require('laravel-mix');

mix.setResourceRoot('');

mix
.ts('src/ts/app.ts', 'public/dist/js/')
.sass('src/scss/app.scss', 'public/dist/css/')

;