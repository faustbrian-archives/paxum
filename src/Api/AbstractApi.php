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

use BrianFaust\Unified\AbstractApi as BaseApi;

abstract class AbstractApi extends BaseApi
{
    public function post($path)
    {
        $this->addFormParameter('method', $path);

        return parent::post(null);
    }
}
