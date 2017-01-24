<?php
namespace RedePay\Transaction;

//require_once "src/Transaction/Transaction.php";
//require_once "src/Shipping/Shipping.php";
//require_once "src/Shipping/ShippingBuilder.php";
//require_once "src/Item/Item.php";
//require_once "src/History/History.php";



trait TransactionBuilder {
	use \RedePay\Shipping\ShippingBuilder;
	
    private function buildTransaction($data) {
		$data->shipping = new \RedePay\Shipping\Shipping($this->buildShipping($data->shipping));

		foreach ($data->items as $key => $value) {
			$data->items[$key] = new \RedePay\Item\Item($value);
		}

		foreach ($data->statusHistory as $key => $value) {
			$data->statusHistory[$key] = new \RedePay\History\History($value);
		}
        return new Transaction(get_object_vars($data));
    }
}
