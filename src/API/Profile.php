<?php

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

class Profile extends AbstractAPI
{
    public function addressInquiry(array $parameters): HttpResponse
    {
        return $this->post('addressInquiry', $parameters);
    }

    public function addAddress(array $parameters): HttpResponse
    {
        return $this->post('addAddress', $parameters);
    }

    public function deleteAddress(array $parameters): HttpResponse
    {
        return $this->post('deleteAddress', $parameters);
    }
}
