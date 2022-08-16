
[<img src="https://github-ads.s3.eu-central-1.amazonaws.com/support-ukraine.svg?t=1" />](https://supportukrainenow.org)

# Filesize conversions in PHP

[![Latest Version on Packagist](https://img.shields.io/packagist/v/xndbogdan/filesize-conversions.svg?style=flat-square)](https://packagist.org/packages/xndbogdan/filesize-conversions)
[![Tests](https://github.com/xndbogdan/filesize-conversions/actions/workflows/run-tests.yml/badge.svg?branch=main)](https://github.com/xndbogdan/filesize-conversions/actions/workflows/run-tests.yml)
[![Total Downloads](https://img.shields.io/packagist/dt/xndbogdan/filesize-conversions.svg?style=flat-square)](https://packagist.org/packages/xndbogdan/filesize-conversions)

This is a php plugin that lets you convert filesizes.
I'm not sure why would anyone need this, but here it is!

## Installation

You can install the package via composer:

```bash
composer require xndbogdan/filesize-conversions
```

## Usage

```php
FilesizeConversions::fromBytes(pow(1024, 5))->toPetabytes();
```

You can also use this package to get a real file's size and convert it to anything, like this:

```php
FilesizeConversions::fromFile($yourFilePath)->toKilobytesHuman();
```

Moreover, you can now do quick conversions
```php
FileSizeConversions::quickConvert('megabytes', 'kilobytes', 15);
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
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
