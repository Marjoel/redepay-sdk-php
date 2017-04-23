<?php

namespace RedePay\Transaction;

use \RedePay\Utils\AbstractHandler;
use \RedePay\Utils\Client;
use \RedePay\Transaction\Request\TransactionGet;

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
    use \RedePay\Transaction\TransactionBuilder;

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
