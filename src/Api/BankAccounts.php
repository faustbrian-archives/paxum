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

class BankAccounts extends AbstractApi
{
    public function bankAccountInquiry(array $parameters)
    {
        $this->setFormParameter($parameters);

        return $this->post('bankAccountInquiry');
    }

    public function addBankAccount(array $parameters)
    {
        $this->setFormParameter($parameters);

        return $this->post('addBankAccount');
    }

    public function deleteBankAccount(array $parameters)
    {
        $this->setFormParameter($parameters);

        return $this->post('deleteBankAccount');
    }

    public function setPrimaryBankAccount(array $parameters)
    {
        $this->setFormParameter($parameters);

        return $this->post('setPrimaryBankAccount');
    }
}
