<?php

/*
 * This file is part of Paxum PHP Client.
 *
 * (c) Brian Faust <hello@brianfaust.me>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\Paxum;

use BrianFaust\Http\Http;

class Client
{
    /**
     * @var string
     */
    private $key;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $sharedSecret;

    /**
     * Create a new client instance.
     *
     * @param string $sharedSecret
     * @param string $email
     */
    public function __construct(string $sharedSecret, string $email)
    {
        $this->sharedSecret = $sharedSecret;
        $this->email        = $email;
        $this->key          = md5("{$sharedSecret}{$email}");
    }

    /**
     * Create a new API service instance.
     *
     * @param string $name
     *
     * @return \BrianFaust\Paxum\API\AbstractAPI
     */
    public function api(string $name): API\AbstractAPI
    {
        $client = Http::withBaseUri("https://www.paxum.com/payment/api/paymentAPI.php?key={$key}&fromEmail={$email}");

        $class = "BrianFaust\\Paxum\\API\\{$name}";

        return new $class($client);
    }
}
