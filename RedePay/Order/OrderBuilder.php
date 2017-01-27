<?php
namespace RedePay\Order;

use \RedePay\Shipping\Shipping;
use \RedePay\Customer\Customer;
use \RedePay\Item\Item;
use \RedePay\History\StatusHistory;
use \RedePay\History\TransactionHistory;
use \RedePay\History\ReversalHistory;
use \RedePay\Order\Order;

trait OrderBuilder {
	use \RedePay\Shipping\ShippingBuilder;

	private function buildOrder($data) {
		if(isset($data->shipping)) {
			$data->shipping = new Shipping($this->buildShipping($data->shipping));
		}

		if(isset($data->customer)) {
			$data->customer = new Customer($data->customer);
		}

		if(isset($data->items)) {
			foreach ($data->items as $key => $value) {
				$data->items[$key] = new Item($value);
			}
		}

		if(isset($data->statusHistory)) {
			foreach ($data->statusHistory as $key => $value) {
				$data->statusHistory[$key] = new StatusHistory($value);
			}
		}

		if(isset($data->transactionHistory)) {
			foreach ($data->transactionHistory as $key => $value) {
				$data->transactionHistory[$key] = new TransactionHistory($value);
			}
		}

		if(isset($data->reversalHistory)) {
			foreach ($data->reversalHistory as $key => $value) {
				$data->reversalHistory[$key] = new ReversalHistory($value);
			}
		}
		return new Order(get_object_vars($data));
	}
}
