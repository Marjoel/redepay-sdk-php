<?php
/**
*  @author   Marjoel Moreira [marjoel@marjoel.com]
*  @license  https://www.gnu.org/licenses/gpl-3.0.en.html
*/

namespace RedePay\Transaction;

use \RedePay\Utils\AbstractHandler;
use \RedePay\Utils\Client;
use \RedePay\Transaction\Request\TransactionGet;

class TransactionHandler extends AbstractHandler {
    use \RedePay\Transaction\TransactionBuilder;

    public function get($transactionId) {
        $request = new TransactionGet($transactionId);
        $response = $this->client->send($request);
        return $this->buildTransaction($response);
    }
}
