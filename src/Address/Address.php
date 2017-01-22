<?php
require_once "RedePay/Utils/Fillable.php";

class Address {
    use Fillable;

    private $alias;
    private $street;
    private $number;
    private $complement;
    private $postalCode;
    private $district;
    private $city;
    private $state;

    public function __construct($data) {
        $this->fill($data);
    }

    public function getAlias() {
        return $this->alias;
    }

    public function getStreet() {
        return $this->street;
    }

    public function getNumber() {
        return $this->number;
    }

    public function getComplement() {
        return $this->complement;
    }

    public function getPostalCode() {
        return $this->postalCode;
    }

    public function getDistrict() {
        return $this->district;
    }

    public function getCity() {
        return $this->city;
    }

    public function getState() {
        return $this->state;
    }
}
