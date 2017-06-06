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

class Profile extends AbstractApi
{
    public function addressInquiry(array $parameters)
    {
        $this->setFormParameter($parameters);

        return $this->post('addressInquiry');
    }

    public function addAddress(array $parameters)
    {
        $this->setFormParameter($parameters);

        return $this->post('addAddress');
    }

    public function deleteAddress(array $parameters)
    {
        $this->setFormParameter($parameters);

        return $this->post('deleteAddress');
    }
}
