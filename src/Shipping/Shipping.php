<?php
require_once "RedePay/Utils/Fillable.php";

class Shipping {
    use Fillable;

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
