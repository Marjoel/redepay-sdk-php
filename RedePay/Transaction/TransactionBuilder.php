<?php
namespace RedePay\Transaction;

use \RedePay\Customer\Customer;
use \RedePay\Payment\Payment;
use \RedePay\Shipping\Shipping;
use \RedePay\Item\Item;
use \RedePay\History\History;
use \RedePay\Transaction\Transaction;

trait TransactionBuilder {
	use \RedePay\Shipping\ShippingBuilder;
	
	private function buildTransaction($data) {
		$data->customer = new Customer((object) array(
				"name" => $data->customerName,
				"email" => $data->customerEmail
			)
		);

		$data->payment = new Payment((object) array(
				"method" => $data->paymentMethod,
				"cardBrand" => $data->cardBrand,
				"installments" => $data->installments
			)
		);

		$data->shipping->trackingNumber = $data->trackingNumber;
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
