<?php

declare(strict_types=1);

/*
 * This file is part of Paxum PHP Client.
 *
 * (c) Brian Faust <hello@basecode.sh>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Plients\Paxum\API;

use Plients\Http\HttpResponse;

class Miscellaneous extends AbstractAPI
{
    public function identityVerificationInquiry(array $parameters): HttpResponse
    {
        return $this->post('identityVerificationInquiry', $parameters);
    }

    public function identityVerification(array $parameters): HttpResponse
    {
        return $this->post('identityVerification', $parameters);
    }

    public function currencyInquiry(array $parameters): HttpResponse
    {
        return $this->post('currencyInquiry', $parameters);
    }

    public function emailInquiry(): HttpResponse
    {
        return $this->post('emailInquiry', $parameters);
    }

    public function newsInquiry(): HttpResponse
    {
        return $this->post('newsInquiry', $parameters);
    }

    public function login(): HttpResponse
    {
        return $this->post('login', [
            'fromEmail' => $this->client->email,
            'fromEmail' => md5("{$this->client->email}{$this->client->sharedSecret}"),
        ]);
    }
}
