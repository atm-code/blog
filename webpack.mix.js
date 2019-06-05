const mix = require('laravel-mix');

require('laravel-mix-tailwind');
require('laravel-mix-purgecss');

mix.js('resources/js/app.js', 'public/js')
   .postCss('resources/css/app.css', 'public/css')
   .tailwind('./tailwind.config.js')
   .purgeCss({
       enabled: true,
       // Other options are passed through to Purgecss
       whitelistPatterns: [/hljs/ , /ql-syntax/],
   });
