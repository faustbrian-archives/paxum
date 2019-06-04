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
