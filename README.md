# Paxum PHP Client

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

## Security

If you discover a security vulnerability within this package, please send an e-mail to Brian Faust at hello@brianfaust.de. All security vulnerabilities will be promptly addressed.

## License

[MIT](LICENSE) © [Brian Faust](https://brianfaust.de)
