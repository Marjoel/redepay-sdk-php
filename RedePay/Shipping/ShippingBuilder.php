<?php
namespace RedePay\Shipping;

use \RedePay\Address\Address;
use \RedePay\Shipping\Shipping;

trait ShippingBuilder {
	private function buildShipping($data) {
		$data->address = new Address(get_object_vars($data->address));
		return new Shipping(get_object_vars($data));
	}
}
