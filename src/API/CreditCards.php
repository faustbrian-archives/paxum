<?php

declare(strict_types=1);

/*
 * This file is part of Paxum PHP Client.
 *
 * (c) Brian Faust <hello@brianfaust.me>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\Paxum\API;

use BrianFaust\Http\HttpResponse;

class CreditCards extends AbstractAPI
{
    public function cardInquiry(array $parameters): HttpResponse
    {
        return $this->post('cardInquiry', $parameters);
    }

    public function addCard(array $parameters): HttpResponse
    {
        return $this->post('addCard', $parameters);
    }

    public function deleteCard(array $parameters): HttpResponse
    {
        return $this->post('deleteCard', $parameters);
    }

    public function setPrimaryCard(array $parameters): HttpResponse
    {
        return $this->post('setPrimaryCard', $parameters);
    }
}
