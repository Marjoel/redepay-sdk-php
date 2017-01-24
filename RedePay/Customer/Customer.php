<?php
namespace RedePay\Customer;

class Customer {
    use \RedePay\Utils\Fillable;

    private $name;
    private $email;

    public function __construct($data) {
        $this->fill($data);
    }

    public function getName() {
        return $this->name;
    }

    public function getEmail() {
        return $this->email;
    }
}
