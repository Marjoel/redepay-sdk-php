<?php
namespace RedePay\Address;

class Address {
    use \RedePay\Utils\Fillable;

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

    public function setAlias($alias) {
        $this->alias = $alias;
    }

    public function setStreet($street) {
        $this->street = $street;
    }

    public function setNumber($number) {
        $this->number = $number;
    }

    public function setComplement($complement) {
        $this->complement = $complement;
    }

    public function setPostalCode($postalCode) {
        $this->postalCode = $postalCode;
    }

    public function setDistrict($district) {
        $this->district = $district;
    }

    public function setCity($city) {
        $this->city = $city;
    }

    public function setState($state) {
        $this->state = $state;
    }
}
