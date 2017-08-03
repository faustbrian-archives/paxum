<?php

declare(strict_types=1);

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

class Transactions extends AbstractAPI
{
    public function transferFunds(array $parameters): HttpResponse
    {
        return $this->post('transferFunds', $parameters);
    }

    public function massTransferFunds(array $parameters): HttpResponse
    {
        return $this->post('massTransferFunds', $parameters);
    }

    public function transferFundsBetweenAccounts(array $parameters): HttpResponse
    {
        return $this->post('transferFundsBetweenAccounts', $parameters);
    }

    public function refundTransaction(array $parameters): HttpResponse
    {
        return $this->post('refundTransaction', $parameters);
    }

    public function requestMoney(array $parameters): HttpResponse
    {
        return $this->post('requestMoney', $parameters);
    }

    public function balanceInquiry(array $parameters): HttpResponse
    {
        return $this->post('balanceInquiry', $parameters);
    }

    public function transactionHistory(array $parameters): HttpResponse
    {
        return $this->post('transactionHistory', $parameters);
    }

    public function subscriptionList(array $parameters): HttpResponse
    {
        return $this->post('subscriptionList', $parameters);
    }

    public function cancelSubscription(array $parameters): HttpResponse
    {
        return $this->post('cancelSubscription', $parameters);
    }

    public function addFundsFromCard(array $parameters): HttpResponse
    {
        return $this->post('addFundsFromCard', $parameters);
    }

    public function addFundsFromBankAccount(array $parameters): HttpResponse
    {
        return $this->post('addFundsFromBankAccount', $parameters);
    }

    public function withdrawFundsToCard(array $parameters): HttpResponse
    {
        return $this->post('withdrawFundsToCard', $parameters);
    }

    public function withdrawFundsToBankAccount(array $parameters): HttpResponse
    {
        return $this->post('withdrawFundsToBankAccount', $parameters);
    }
}
