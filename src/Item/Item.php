<?php
require_once "RedePay/Utils/Fillable.php";

class Item {
    use Fillable;

    private $id;
    private $description;
    private $amount;
    private $quantity;
    private $freight;
    private $discount;

    public function __construct($data) {
        $this->fill($data);
    }

    public function getId() {
        return $this->id;
    }

    public function getDescription() {
        return $this->description;
    }

    public function getAmount() {
        return $this->amount;
    }

    public function getQuantity() {
        return $this->quantity;
    }

    public function getFreight() {
        return $this->freight;
    }

    public function getDiscount() {
        return $this->discount;
    }
}
