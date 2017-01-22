<?php
require_once "RedePay/Transaction/Transaction.php";
require_once "RedePay/Shipping/Shipping.php";
require_once "RedePay/Shipping/ShippingBuilder.php";
require_once "RedePay/Item/Item.php";
require_once "RedePay/History/History.php";

trait TransactionBuilder {
	use ShippingBuilder;
	
    private function buildTransaction($data) {
		$data->shipping = new Shipping($this->buildShipping($data->shipping));

		foreach ($data->items as $key => $value) {
			$data->items[$key] = new Item($value);
		}

		foreach ($data->statusHistory as $key => $value) {
			$data->statusHistory[$key] = new History($value);
		}

        return new Transaction(get_object_vars($data));
    }
}
