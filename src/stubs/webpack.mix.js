const mix = require('laravel-mix');
require('laravel-mix-purgecss');

// JS
mix.js('resources/js/app.js', 'public/js');

// CSS
mix
.postCss('resources/css/app.css', 'public/css')
  .options({
    postCss: [
      require('postcss-import')(),
      require('tailwindcss')('tailwind.config.js'),
      require('postcss-nesting')(),
    ]
})
.purgeCss({
    enabled: mix.inProduction(),
    folders: ['src', 'templates'],
    extensions: ['html', 'js', 'php', 'vue'],
});

if (mix.inProduction()) {
    mix.version()
}