# A simple way to install Vue, Tailwind and PurgeCSS

[![Latest Version on Packagist](https://img.shields.io/packagist/v/carloosolrac/laravel-vue-tailwind-purgecss.svg?style=flat-square)](https://packagist.org/packages/carloosolrac/laravel-vue-tailwind-purgecss)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/carloosolrac/laravel-vue-tailwind-purgecss/run-tests?label=tests)](https://github.com/carloosolrac/laravel-vue-tailwind-purgecss/actions?query=workflow%3Arun-tests+branch%3Amaster)
[![Total Downloads](https://img.shields.io/packagist/dt/carloosolrac/laravel-vue-tailwind-purgecss.svg?style=flat-square)](https://packagist.org/packages/carloosolrac/laravel-vue-tailwind-purgecss)


This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Support us

Learn how to create a package like this one, by watching our premium video course:

[![Laravel Package training](https://spatie.be/github/package-training.jpg)](https://laravelpackage.training)

We invest a lot of resources into creating [best in class open source packages](https://spatie.be/open-source). You can support us by [buying one of our paid products](https://spatie.be/open-source/support-us).

We highly appreciate you sending us a postcard from your hometown, mentioning which of our package(s) you are using. You'll find our address on [our contact page](https://spatie.be/about-us). We publish all received postcards on [our virtual postcard wall](https://spatie.be/open-source/postcards).

## Installation

You can install the package via composer:

```bash
composer require carloosolrac/laravel-vue-tailwind-purgecss
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --provider="Carloosolrac\LaravelVueTailwindPurgecss\LaravelVueTailwindPurgecssServiceProvider" --tag="migrations"
php artisan migrate
```

You can publish the config file with:
```bash
php artisan vendor:publish --provider="Carloosolrac\LaravelVueTailwindPurgecss\LaravelVueTailwindPurgecssServiceProvider" --tag="config"
```

This is the contents of the published config file:

```php
return [
];
```

## Usage

``` php
$laravel-vue-tailwind-purgecss = new Carloosolrac\LaravelVueTailwindPurgecss();
echo $laravel-vue-tailwind-purgecss->echoPhrase('Hello, Carloosolrac!');
```

## Testing

``` bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Carloosolrac](https://github.com/Carloosolrac)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
