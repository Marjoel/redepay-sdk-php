<?php
namespace RedePay\Transaction;

trait TransactionBuilder {
	use \RedePay\Shipping\ShippingBuilder;
	
    private function buildTransaction($data) {
		$data->shipping = new \RedePay\Shipping\Shipping($this->buildShipping($data->shipping));

		foreach ($data->items as $key => $value) {
			$data->items[$key] = new \RedePay\Item\Item($value);
		}

		foreach ($data->statusHistory as $key => $value) {
			$data->statusHistory[$key] = new \RedePay\History\StatusHistory($value);
		}
        return new Transaction(get_object_vars($data));
    }
}
