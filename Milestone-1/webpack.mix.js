let mix = require('laravel-mix');

mix.js('src/main.js', 'assets/js')
mix.sass('src/style.scss' , 'assets/css')
mix.copy('./img', 'dist/assets/img')
mix.copy('index.php', 'dist/')
.setPublicPath('dist');
