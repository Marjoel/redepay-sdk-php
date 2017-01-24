<?php
namespace RedePay\Transaction\Request;

class TransactionGet implements \RedePay\Utils\RequestInterface {
	private $apiKey;
    private $transactionId;

    public function __construct($apiKey, $transactionId) {
		$this->apiKey = $apiKey;
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

    public function getApiKey() {
        return $this->apiKey;
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
}
