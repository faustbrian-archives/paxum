<?php

/*
 * This file is part of Paxum PHP Client.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\Paxum\Api;

class Miscellaneous extends AbstractApi
{
    public function identityVerificationInquiry(array $parameters)
    {
        $this->setFormParameter($parameters);

        return $this->post('identityVerificationInquiry');
    }

    public function identityVerification(array $parameters)
    {
        $this->setFormParameter($parameters);

        return $this->post('identityVerification');
    }

    public function currencyInquiry(array $parameters)
    {
        $this->setFormParameter($parameters);

        return $this->post('currencyInquiry');
    }

    public function emailInquiry()
    {
        $this->setFormParameter($parameters);

        return $this->post('emailInquiry');
    }

    public function newsInquiry()
    {
        $this->setFormParameter($parameters);

        return $this->post('newsInquiry');
    }

    public function login()
    {
        return $this->buildKey([$this->client->getFromEmail()])
                    ->setMethod('login')
                    ->sendRequest();
    }
}
