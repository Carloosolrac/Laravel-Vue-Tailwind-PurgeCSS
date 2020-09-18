# Laravel 8 VTP

[![Latest Version on Packagist](https://img.shields.io/packagist/v/carloosolrac/laravel-vue-tailwind-purgecss.svg?style=flat-square)](https://packagist.org/packages/carloosolrac/laravel-vue-tailwind-purgecss)
[![Total Downloads](https://img.shields.io/packagist/dt/carloosolrac/laravel-vue-tailwind-purgecss.svg?style=flat-square)](https://packagist.org/packages/carloosolrac/laravel-vue-tailwind-purgecss)


A simple way to install Vue, Tailwind and PurgeCSS in Laravel 8 projects.

## Installation

You can install the package via composer:

```bash
composer require carloosolrac/laravel-vue-tailwind-purgecss
```


## Usage

After you install it, just execute this command.

``` bash
php artisan preset:vtp
```

> :warning: This command delete some foldes, replaces some files and edit another ones. **Use it with precaution** 

Then you need install npm dependencies and Tailwind config file.

```bash 
npm install && npx tailwind init && npm run dev
```

If you want a full Tailwind config you can run the next command:

```bash
npm install && npx tailwind init --full && npm run dev
```


## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.



## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
