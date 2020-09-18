# Laravel 8 VueTailwindPurgeCSS

[![Latest Version on Packagist](https://img.shields.io/packagist/v/carloosolrac/laravel-vue-tailwind-purgecss.svg?style=flat-square)](https://packagist.org/packages/carloosolrac/laravel-vue-tailwind-purgecss)
[![Total Downloads](https://img.shields.io/packagist/dt/carloosolrac/laravel-vue-tailwind-purgecss.svg?style=flat-square)](https://packagist.org/packages/carloosolrac/laravel-vue-tailwind-purgecss)


A simple way to install Vue, Tailwind and PurgeCSS in Laravel 8 projects without `laravel/ui:3.0` or `Jetstream`.

**What it includes:**
- [Vue.js](https://vuejs.org/)
- [Tailwind CSS](https://tailwindcss.com)
- [Purgecss](https://www.purgecss.com/), by [spatie/laravel-mix-purgecss](https://github.com/spatie/laravel-mix-purgecss)

**Additionals:**
- [postcss-nesting](https://github.com/jonathantneal/postcss-nesting) 
- `ExampleComponent` is back!
- Replaces the `welcome.blade.php` template with one that extends the main layout `layouts/app.blade.php`
- Two CSS files for custom components and custom utilities, **don't be afraid to extend it!**
- `Webpack.mix.js` configured just the way I like it.

## Installation

You can install the package via composer in your fresh Laravel 8 project:

```bash
composer require carloosolrac/laravel-vue-tailwind-purgecss
```

## Usage

After you install it, just execute this command.

``` bash
php artisan preset:vtp
```

> :warning: This command delete some foldes, replaces some files and edit another ones. **Use it with precaution** 

Then, you need install npm dependencies and create the Tailwind config file.

```bash 
npm install && npx tailwind init && npm run dev
```

If you want a full Tailwind config you can run the next command:

```bash
npm install && npx tailwind init --full && npm run dev
```

## Uninstall

When you complete the instalation, configuration you can remove this packages from you project as well.

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.


## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
