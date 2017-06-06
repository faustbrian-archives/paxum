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

class CreditCards extends AbstractApi
{
    public function cardInquiry(array $parameters)
    {
        $this->setFormParameter($parameters);

        return $this->post('cardInquiry');
    }

    public function addCard(array $parameters)
    {
        $this->setFormParameter($parameters);

        return $this->post('addCard');
    }

    public function deleteCard(array $parameters)
    {
        $this->setFormParameter($parameters);

        return $this->post('deleteCard');
    }

    public function setPrimaryCard(array $parameters)
    {
        $this->setFormParameter($parameters);

        return $this->post('setPrimaryCard');
    }
}
