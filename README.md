# :package_name

[![Latest Version on Packagist](https://img.shields.io/packagist/v/:vendor/:package_name.svg?style=flat-square)](https://packagist.org/packages/:vendor/:package_name)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE.md)
[![Build Status](https://img.shields.io/travis/:vendor/:package_name/master.svg?style=flat-square)](https://travis-ci.org/:vendor/:package_name)
[![StyleCI](https://styleci.io/repos/:styleci_id/shield)](https://styleci.io/repos/:styleci_id)
[![SensioLabsInsight](https://img.shields.io/sensiolabs/i/:sensiolabs_id.svg?style=flat-square)](https://insight.sensiolabs.com/projects/:sensiolabs_id)
[![Quality Score](https://img.shields.io/scrutinizer/g/:vendor/:package_name.svg?style=flat-square)](https://scrutinizer-ci.com/g/:vendor/:package_name)
[![Code Coverage](https://img.shields.io/scrutinizer/coverage/g/:vendor/:package_name/master.svg?style=flat-square)](https://scrutinizer-ci.com/g/:vendor/:package_name/?branch=master)
[![Total Downloads](https://img.shields.io/packagist/dt/:vendor/:package_name.svg?style=flat-square)](https://packagist.org/packages/:vendor/:package_name)

Replacement example:

```
:vendor             elfsundae
:package_name       my-package
:namespace          ElfSundae\Laravel\Skeleton
:author_name        Elf Sundae
:author_email       elf.sundae@gmail.com
:author_website     https://0x123.com
:styleci_id         66657812
:sensiolabs_id      69edea46-6837-4c7c-9b2f-11c8e320379b
```

## Installation

You can install this package via the [Composer](https://getcomposer.org) manager:

```sh
$ composer require :vendor/:package_name
```

Then register the service provider by adding the following to the `providers` array in `config/app.php`:

```php
:namespace\:package_nameServiceProvider::class,
```

And publish the config file:

```sh
$ php artisan vendor:publish --tag=:package_name
```

## Usage

## Testing

```sh
$ composer test
```

## License

This package is open-sourced software licensed under the [MIT License](LICENSE.md).

