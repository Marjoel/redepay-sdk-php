<?php
require_once "RedePay/Utils/RequestInterface.php";

class TransactionGet implements RequestInterface {
    private $transactionId;

    public function __construct($transactionId) {
        $this->transactionId = $transactionId;
    }

    public function getPayload() {
        return [];
    }

    public function getPath() {
        return sprintf("%s/transactions/%s", $this->getApiUrl(), $this->getId());
    }

    public function getId() {
        return $this->transactionId;
    }

    public function getData() {
        return null;
    }

    public function getMethod() {
        return self::HTTP_GET;
    }

    public function getApiUrl() {
        return self::API_URL;
    }

    public function getApiKey() {
        return self::API_KEY;
    }
}
