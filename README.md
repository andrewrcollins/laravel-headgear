# Laravel Headgear

[![Latest Version on Packagist](https://img.shields.io/packagist/v/andrewrcollins/laravel-headgear.svg?style=flat-square)](https://packagist.org/packages/andrewrcollins/laravel-headgear)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/andrewrcollins/laravel-headgear/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/andrewrcollins/laravel-headgear/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/andrewrcollins/laravel-headgear/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/andrewrcollins/laravel-headgear/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/andrewrcollins/laravel-headgear.svg?style=flat-square)](https://packagist.org/packages/andrewrcollins/laravel-headgear)

Equip your Laravel app with OAuth 2.0 headgear -- keep it safe during development and testing.

## Installation

You can install the package via composer:

```bash
composer require andrewrcollins/laravel-headgear
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="laravel-headgear-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="laravel-headgear-config"
```

This is the contents of the published config file:

```php
return [
];
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="laravel-headgear-views"
```

## Usage

```php
$laravelHeadgear = new AndrewRCollins\LaravelHeadgear();
echo $laravelHeadgear->echoPhrase('Hello, AndrewRCollins!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Andrew Collins](https://github.com/andrewrcollins)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
