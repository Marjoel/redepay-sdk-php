<?php
/**
*  @author   Marjoel Moreira [marjoel@marjoel.com]
*  @license  https://www.gnu.org/licenses/gpl-3.0.en.html
*/

namespace RedePay\Shipping;

use \RedePay\Address\Address;
use \RedePay\Shipping\Shipping;

trait ShippingBuilder {
    private function buildShipping($data) {
        $data->address = new Address(get_object_vars($data->address));
        return new Shipping(get_object_vars($data));
    }
}
