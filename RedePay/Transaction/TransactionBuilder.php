<?php
namespace RedePay\Transaction;

use \RedePay\Shipping\Shipping;
use \RedePay\Item\Item;
use \RedePay\History\StatusHistory;
use \RedePay\Transaction\Transaction;

trait TransactionBuilder {
	use \RedePay\Shipping\ShippingBuilder;
	
	private function buildTransaction($data) {
		$data->shipping = new Shipping($this->buildShipping($data->shipping));

		foreach ($data->items as $key => $value) {
			$data->items[$key] = new Item($value);
		}

		foreach ($data->statusHistory as $key => $value) {
			$data->statusHistory[$key] = new StatusHistory($value);
		}
		return new Transaction(get_object_vars($data));
	}
}
