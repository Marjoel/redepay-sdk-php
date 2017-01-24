<?php
namespace RedePay\Transaction;

class TransactionHandler {
	use \RedePay\Utils\Client;
	use TransactionBuilder;
	
    public function get($transactionId) {
        $request = new Request\TransactionGet($transactionId);
		$response = $this->send($request);

		return $this->buildTransaction($response);
    }
}
