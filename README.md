# Accounting chart of accounts management package

[![Latest Version on Packagist](https://img.shields.io/packagist/v/africode/coa.svg?style=flat-square)](https://packagist.org/packages/africode/coa)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/africode/coa/run-tests?label=tests)](https://github.com/africode/coa/actions?query=workflow%3Arun-tests+branch%3Amaster)
[![Total Downloads](https://img.shields.io/packagist/dt/africode/coa.svg?style=flat-square)](https://packagist.org/packages/africode/coa)


This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Installation

You can install the package via composer:

```bash
composer require africode/coa
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --provider="Africode\Coa\CoaServiceProvider" --tag="migrations"
php artisan migrate
```

You can publish the config file with:
```bash
php artisan vendor:publish --provider="Africode\Coa\CoaServiceProvider" --tag="config"
```

This is the contents of the published config file:

```php
return [
];
```

## Usage

``` php
$coa = new Africode\Coa();
echo $coa->echoPhrase('Hello, Africode!');
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

- [Symplice BONI](https://github.com/Sympol)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
