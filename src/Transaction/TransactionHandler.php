<?php

require_once "RedePay/Utils/Client.php";
require_once "RedePay/Transaction/TransactionBuilder.php";
require_once "RedePay/Transaction/Request/TransactionGet.php";

class TransactionHandler {
	use Client;
	use TransactionBuilder;

    public function get($transactionId) {
        $request = new TransactionGet($transactionId);
		$response = $this->send($request);

		return $this->buildTransaction($response);
    }
}
