<?php

namespace RedePay\Transaction;

use RedePay\Transaction\Request\TransactionGet;
use RedePay\Utils\AbstractHandler;

/**
 * Class TransactionHandler
 *
 * @author Marjoel Moreira <marjoel@marjoel.com>
 * @license https://www.gnu.org/licenses/gpl-3.0.en.html
 */
class TransactionHandler extends AbstractHandler
{
    /**
     * Traits
     */
    use TransactionBuilder;

    /**
     * Gets a transaction
     *
     * @param string $transactionId
     * @return Transaction
     */
    public function get($transactionId)
    {
        $request = new TransactionGet($transactionId);
        $response = $this->client->send($request);
        return $this->buildTransaction($response);
    }
}
