# :
[![License](https://img.shields.io/github/license/:tallandsassy/:app-theme-base-admin)](https://github.com/:tallandsassy/:app-theme-base-admin/blob/master/LICENSE.md)
[![Latest Version on Packagist](https://img.shields.io/packagist/v/:tallandsassy/:app-theme-base-admin.svg?style=flat-square)](https://packagist.org/packages/:tallandsassy/:app-theme-base-admin)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/:tallandsassy/:app-theme-base-admin/run-tests?label=tests)](https://github.com/:tallandsassy/:app-theme-base-admin/actions?query=workflow%3Arun-tests+branch%3Amaster)
[![Coverage Status](https://coveralls.io/repos/github/:tallandsassy/:app-theme-base-admin/badge.svg?branch=master)](https://coveralls.io/github/:tallandsassy/:app-theme-base-admin?branch=master)

[![Total Downloads](https://img.shields.io/packagist/dt/:tallandsassy/:app-theme-base-admin.svg?style=flat-square)](https://packagist.org/packages/:tallandsassy/:app-theme-base-admin)


This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Support us

Please send love

## Installation

You can install the package via composer:

[ ] Make a local table for testing called 'tmp_laravel_package' (per 'phpunit.xml')

```bash
composer require tallandsassy/app-theme-base-admin
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --provider="TallAndSassy\AppThemeBaseAdmin\AppThemeBaseAdminServiceProvider" --tag="migrations"
php artisan migrate
```

You can publish the config file with:
```bash
php artisan vendor:publish --provider="TallAndSassy\AppThemeBaseAdmin\AppThemeBaseAdminServiceProvider" --tag="config"
```

You can grok the routes (when .env(local)) by visiting 
    
http://test-tallandsassy.test/grok/TallAndSassy/AppThemeBaseAdmin/string
http://test-tallandsassy.test/grok/TallAndSassy/AppThemeBaseAdmin/controller

This is the contents of the published config file:

```php
return [
];
```

## Usage

``` php
$app-theme-base-admin = new TallAndSassy\AppThemeBaseAdmin();
echo $app-theme-base-admin->echoPhrase('Hello, TallAndSassy!');
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

- [:jjrohrer](https://github.com/:jjrohrer)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
