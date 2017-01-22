<?php
require_once "RedePay/Shipping/Shipping.php";
require_once "RedePay/Address/Address.php";

trait ShippingBuilder {
    private function buildShipping($data) {
		$data->address = new Address(get_object_vars($data->address));
        return new Shipping(get_object_vars($data));
    }
}
