<?php
namespace RedePay\Transaction;

class TransactionHandler {
	use \RedePay\Utils\Client;
	use TransactionBuilder;

	private $apiKey;

	public function __construct($apiKey) {
		$this->apiKey = $apiKey;
    }

    public function get($transactionId) {
        $request = new Request\TransactionGet($this->apiKey, $transactionId);
		$response = $this->send($request);
		return $this->buildTransaction($response);
    }
}
