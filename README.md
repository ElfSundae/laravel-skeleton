# :package_name

[![Latest Version on Packagist](https://img.shields.io/packagist/v/:vendor/:package_name.svg?style=flat-square)](https://packagist.org/packages/:vendor/:package_name)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE.md)
[![Build Status](https://img.shields.io/travis/:github_username/:package_name/master.svg?style=flat-square)](https://travis-ci.org/:github_username/:package_name)
[![StyleCI](https://styleci.io/repos/:styleci_id/shield)](https://styleci.io/repos/:styleci_id)
[![SensioLabsInsight](https://img.shields.io/sensiolabs/i/:sensiolabs_id.svg?style=flat-square)](https://insight.sensiolabs.com/projects/:sensiolabs_id)
[![Quality Score](https://img.shields.io/scrutinizer/g/:github_username/:package_name.svg?style=flat-square)](https://scrutinizer-ci.com/g/:github_username/:package_name)
[![Code Coverage](https://img.shields.io/scrutinizer/coverage/g/:github_username/:package_name/master.svg?style=flat-square)](https://scrutinizer-ci.com/g/:github_username/:package_name/?branch=master)
[![Total Downloads](https://img.shields.io/packagist/dt/:vendor/:package_name.svg?style=flat-square)](https://packagist.org/packages/:vendor/:package_name)

Replacement example:

```
:vendor             elfsundae
:package_name       laravel-skeleton
:config_name        skeleton
:package_service    Skeleton
:github_username    ElfSundae
:namespace          ElfSundae\Laravel\Skeleton
:psr4_namespace     ElfSundae\\Laravel\\Skeleton
:author_name        Elf Sundae
:author_email       elf.sundae@gmail.com
:author_website     https://0x123.com
:styleci_id         66657812
:sensiolabs_id      69edea46-6837-4c7c-9b2f-11c8e320379b
```

Register new package:

- https://packagist.org/packages/submit
- https://travis-ci.org/profile
- https://styleci.io
- https://insight.sensiolabs.com/projects/new/github
- https://scrutinizer-ci.com/g/new

## Installation

You can install this package using the [Composer](https://getcomposer.org) manager:

```sh
$ composer require :vendor/:package_name
```

For Lumen or earlier Laravel than v5.5, you need to register the service provider manually:

```php
:namespace\:package_serviceServiceProvider::class,
```

Then publish the configuration file and assets:

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
