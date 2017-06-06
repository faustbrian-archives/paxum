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

use BrianFaust\Unified\AbstractClient;

class Client extends AbstractClient
{
    protected function getServiceProvider()
    {
        return ServiceProvider::class;
    }
}
