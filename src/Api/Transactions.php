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

class Transactions extends AbstractApi
{
    public function transferFunds(array $parameters)
    {
        $this->setFormParameter($parameters);

        return $this->post('transferFunds');
    }

    public function massTransferFunds(array $parameters)
    {
        $this->setFormParameter($parameters);

        return $this->post('massTransferFunds');
    }

    public function transferFundsBetweenAccounts(array $parameters)
    {
        $this->setFormParameter($parameters);

        return $this->post('transferFundsBetweenAccounts');
    }

    public function refundTransaction(array $parameters)
    {
        $this->setFormParameter($parameters);

        return $this->post('refundTransaction');
    }

    public function requestMoney(array $parameters)
    {
        $this->setFormParameter($parameters);

        return $this->post('requestMoney');
    }

    public function balanceInquiry(array $parameters)
    {
        $this->setFormParameter($parameters);

        return $this->post('balanceInquiry');
    }

    public function transactionHistory(array $parameters)
    {
        $this->setFormParameter($parameters);

        return $this->post('transactionHistory');
    }

    public function subscriptionList(array $parameters)
    {
        $this->setFormParameter($parameters);

        return $this->post('subscriptionList');
    }

    public function cancelSubscription(array $parameters)
    {
        $this->setFormParameter($parameters);

        return $this->post('cancelSubscription');
    }

    public function addFundsFromCard(array $parameters)
    {
        $this->setFormParameter($parameters);

        return $this->post('addFundsFromCard');
    }

    public function addFundsFromBankAccount(array $parameters)
    {
        $this->setFormParameter($parameters);

        return $this->post('addFundsFromBankAccount');
    }

    public function withdrawFundsToCard(array $parameters)
    {
        $this->setFormParameter($parameters);

        return $this->post('withdrawFundsToCard');
    }

    public function withdrawFundsToBankAccount(array $parameters)
    {
        $this->setFormParameter($parameters);

        return $this->post('withdrawFundsToBankAccount');
    }
}
