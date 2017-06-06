<?php

/*
 * This file is part of Paxum PHP Client.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\Afftrack\Request\Modifiers;

use BrianFaust\Contracts\HttpClient;
use BrianFaust\Modifiers\AbstractModifier;

class FromEmailModifier extends AbstractModifier
{
    public function apply()
    {
        $this->httpClient->addFormParameter('fromEmail', $this->httpClient->getConfig('fromEmail'));

        return $this->httpClient;
    }
}
