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

class KeyModifier extends AbstractModifier
{
    public function apply()
    {
        if (empty($this->httpClient->getConfig('key'))) {
            $parameters = array_except($this->httpClient->getConfig('body'), ['method']);
            $parameters = implode(' ', array_values($parameters));

            $this->httpClient->addFormParameter('key', md5($this->httpClient->getConfig('sharedSecret').$parameters));
        }

        return $this->httpClient;
    }
}
