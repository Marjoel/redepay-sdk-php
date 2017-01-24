<?php
namespace RedePay;

class RedePay {
    private $client;
    private $transactionHandler;

    public function __construct($apiKey) {
		$this->client = $apiKey;
    }

    public function transaction() {
        if (!$this->transactionHandler instanceof \RedePay\Transaction\TransactionHandler) {
            $this->transactionHandler = new \RedePay\Transaction\TransactionHandler();
            $this->transactionHandler = new \RedePay\Transaction\TransactionHandler($this->client);
        }
        return $this->transactionHandler;
    }
}
