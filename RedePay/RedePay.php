<?php
namespace RedePay;

class RedePay {
    private $transactionHandler;
    private $apiKey;

    public function __construct($apiKey) {
		$this->apiKey = $apiKey;
    }

    public function transaction() {
        if (!$this->transactionHandler instanceof \RedePay\Transaction\TransactionHandler) {
            $this->transactionHandler = new \RedePay\Transaction\TransactionHandler($this->apiKey);
        }
        return $this->transactionHandler;
    }

    public function order() {
        if (!$this->orderHandler instanceof \RedePay\Order\OrderHandler) {
            $this->orderHandler = new \RedePay\Order\OrderHandler($this->apiKey);
        }
        return $this->orderHandler;
    }
}
