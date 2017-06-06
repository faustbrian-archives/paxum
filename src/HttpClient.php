<?php

/*
 * This file is part of Paxum PHP Client.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\Paxum;

use BrianFaust\Unified\AbstractHttpClient;
use BrianFaust\Paxum\Request\Modifiers\KeyModifier;
use BrianFaust\Paxum\Request\Modifiers\MethodModifier;
use BrianFaust\Paxum\Request\Modifiers\SandboxModifier;
use BrianFaust\Paxum\Request\Modifiers\FromEmailModifier;
use BrianFaust\Paxum\Request\Modifiers\SharedSecretModifier;

class HttpClient extends AbstractHttpClient
{
    protected $options = [
        'base_uri' => 'https://www.paxum.com/payment/api/paymentAPI.php',
        'headers' => [
           'User-Agent' => 'Paxum-PHP-Client/0.1.0',
        ],
    ];

    protected $requestModifiers = [
        SharedSecretModifier::class,
        FromEmailModifier::class,
        SandboxModifier::class,
        KeyModifier::class,
        MethodModifier::class,
    ];

    protected function buildRequestUri($baseUri, $path)
    {
        return $baseUri;
    }
}
