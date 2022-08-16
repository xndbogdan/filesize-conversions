
[<img src="https://github-ads.s3.eu-central-1.amazonaws.com/support-ukraine.svg?t=1" />](https://supportukrainenow.org)

# Filesize conversions in PHP

[![Latest Version on Packagist](https://img.shields.io/packagist/v/xndbogdan/filesize-conversions.svg?style=flat-square)](https://packagist.org/packages/xndbogdan/filesize-conversions)
[![Tests](https://github.com/xndbogdan/filesize-conversions/actions/workflows/run-tests.yml/badge.svg?branch=main)](https://github.com/xndbogdan/filesize-conversions/actions/workflows/run-tests.yml)
[![Total Downloads](https://img.shields.io/packagist/dt/xndbogdan/filesize-conversions.svg?style=flat-square)](https://packagist.org/packages/xndbogdan/filesize-conversions)

This is a php plugin that lets you convert filesizes.

## Installation

You can install the package via composer:

```bash
composer require xndbogdan/filesize-conversions
```

## Usage

```php
FilesizeConversions::FilesizeConversions::fromBytes(pow(1024, 5))->toPetabytes();
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Bogdan Mihai](https://github.com/xndbogdan)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
