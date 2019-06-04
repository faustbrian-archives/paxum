# Paxum PHP Client

[![Build Status](https://img.shields.io/travis/plients/Paxum-PHP-Client/master.svg?style=flat-square)](https://travis-ci.org/plients/Paxum-PHP-Client)
[![PHP from Packagist](https://img.shields.io/packagist/php-v/plients/paxum.svg?style=flat-square)]()
[![Latest Version](https://img.shields.io/github/release/plients/Paxum-PHP-Client.svg?style=flat-square)](https://github.com/plients/Paxum-PHP-Client/releases)
[![License](https://img.shields.io/packagist/l/plients/Paxum-PHP-Client.svg?style=flat-square)](https://packagist.org/packages/plients/Paxum-PHP-Client)

## Installation

Require this package, with [Composer](https://getcomposer.org/), in the root directory of your project.

``` bash
$ composer require plients/paxum
```

## Usage

``` php
$paxum = new Plients\Paxum\Client('email', 'shared_secret', true); // true = use sandbox-mode

$response = $paxum->api('Miscellaneous')->login();

print_r($response);
```

## Testing

``` bash
$ phpunit
```

## Security

If you discover a security vulnerability within this package, please send an e-mail to hello@basecode.sh. All security vulnerabilities will be promptly addressed.

## Credits

- [Brian Faust](https://github.com/faustbrian)
- [All Contributors](../../contributors)

## License

[MIT](LICENSE) © [Brian Faust](https://basecode.sh)
