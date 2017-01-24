<?php
namespace RedePay\Order;

trait OrderBuilder {
	use \RedePay\Shipping\ShippingBuilder;

    private function buildOrder($data) {
		$data->shipping = new \RedePay\Shipping\Shipping($this->buildShipping($data->shipping));
		$data->customer = new \RedePay\Customer\Customer($data->customer);

		foreach ($data->items as $key => $value) {
			$data->items[$key] = new \RedePay\Item\Item($value);
		}

		foreach ($data->statusHistory as $key => $value) {
			$data->statusHistory[$key] = new \RedePay\History\StatusHistory($value);
		}

		foreach ($data->transactionHistory as $key => $value) {
			$data->transactionHistory[$key] = new \RedePay\History\TransactionHistory($value);
		}

		foreach ($data->reversalHistory as $key => $value) {
			$data->reversalHistory[$key] = new \RedePay\History\ReversalHistory($value);
		}
        return new Order(get_object_vars($data));
    }
}
