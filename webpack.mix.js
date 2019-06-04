const mix = require('laravel-mix');

require('laravel-mix-tailwind');
require('laravel-mix-purgecss');

mix.js('resources/js/app.js', 'public/js')
   .postCss('resources/css/app.css', 'public/css')
   .tailwind('./tailwind.config.js')
   .purgeCss();

if (mix.inProduction()) {
  mix.version();
}
