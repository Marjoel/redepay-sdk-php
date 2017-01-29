<?php
/**
*  @author   Marjoel Moreira [marjoel@marjoel.com]
*  @license  https://www.gnu.org/licenses/gpl-3.0.en.html
*/

namespace RedePay\Transaction\Request;

use \RedePay\Utils\RequestInterface;

class TransactionGet implements RequestInterface {
    private $transactionId;

    public function __construct($transactionId) {
        $this->transactionId = $transactionId;
    }

    public function getTransactionId() {
        return $this->transactionId;
    }

    public function getPath() {
        return sprintf("%s/transactions/%s", $this->getApiUrl(), $this->getTransactionId());
    }

    public function getPayload() {
        return [];
    }

    public function getMethod() {
        return self::HTTP_GET;
    }

    public function getApiUrl() {
        return self::API_URL;
    }
}