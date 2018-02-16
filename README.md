# Paxum PHP Client

[![Build Status](https://img.shields.io/travis/faustbrian/Paxum-PHP-Client/master.svg?style=flat-square)](https://travis-ci.org/faustbrian/Paxum-PHP-Client)
[![PHP from Packagist](https://img.shields.io/packagist/php-v/faustbrian/paxum-php-client.svg?style=flat-square)]()
[![Latest Version](https://img.shields.io/github/release/faustbrian/Paxum-PHP-Client.svg?style=flat-square)](https://github.com/faustbrian/Paxum-PHP-Client/releases)
[![License](https://img.shields.io/packagist/l/faustbrian/Paxum-PHP-Client.svg?style=flat-square)](https://packagist.org/packages/faustbrian/Paxum-PHP-Client)

## Installation

Require this package, with [Composer](https://getcomposer.org/), in the root directory of your project.

``` bash
$ composer require faustbrian/paxum-php-client
```

## Usage

``` php
$paxum = new BrianFaust\Paxum\Client('email', 'shared_secret', true); // true = use sandbox-mode

$response = $paxum->api('Miscellaneous')->login();

print_r($response);
```

## Testing

``` bash
$ phpunit
```

## Security

If you discover a security vulnerability within this package, please send an e-mail to hello@brianfaust.me. All security vulnerabilities will be promptly addressed.

## Credits

- [Brian Faust](https://github.com/faustbrian)
- [All Contributors](../../contributors)

## License

[MIT](LICENSE) © [Brian Faust](https://brianfaust.me)
