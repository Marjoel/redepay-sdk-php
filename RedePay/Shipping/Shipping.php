<?php
namespace RedePay\Shipping;

class Shipping {
	use \RedePay\Utils\Fillable;

    private $address;
    private $cost;

    public function __construct($data) {
        $this->fill($data);
    }

    public function getAddress() {
        return $this->address;
    }

    public function getCost() {
        return $this->cost;
    }
}