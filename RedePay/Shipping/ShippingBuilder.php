<?php
namespace RedePay\Shipping;

trait ShippingBuilder {
    private function buildShipping($data) {
		$data->address = new \RedePay\Address\Address(get_object_vars($data->address));
        return new \RedePay\Shipping\Shipping(get_object_vars($data));
    }
}
