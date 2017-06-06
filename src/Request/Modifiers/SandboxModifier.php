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

class SandboxModifier extends AbstractModifier
{
    public function apply()
    {
        if ($this->httpClient->getConfig('sandbox')) {
            $this->httpClient->addFormParameter('sandbox', 'ON');
            $this->httpClient->addFormParameter('return', $this->httpClient->getConfig('return'));
        }

        return $this->httpClient;
    }
}
