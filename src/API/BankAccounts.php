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

class BankAccounts extends AbstractAPI
{
    public function bankAccountInquiry(array $parameters): HttpResponse
    {
        return $this->post('bankAccountInquiry', $parameters);
    }

    public function addBankAccount(array $parameters): HttpResponse
    {
        return $this->post('addBankAccount', $parameters);
    }

    public function deleteBankAccount(array $parameters): HttpResponse
    {
        return $this->post('deleteBankAccount', $parameters);
    }

    public function setPrimaryBankAccount(array $parameters): HttpResponse
    {
        return $this->post('setPrimaryBankAccount', $parameters);
    }
}
