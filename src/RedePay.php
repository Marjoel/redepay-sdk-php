<?php
require_once "RedePay/Transaction/TransactionHandler.php";

class RedePay {
    private $client;
    private $transactionHandler;

    public function __construct($apiKey) {
        $this->client = $apiKey;
    }

    public function transaction() {
        if (!$this->transactionHandler instanceof TransactionHandler) {
            $this->transactionHandler = new TransactionHandler();
            $this->transactionHandler = new TransactionHandler($this->client);
        }
        return $this->transactionHandler;
    }
}

