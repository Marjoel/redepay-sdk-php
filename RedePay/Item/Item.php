<?php
namespace RedePay\Item;

class Item {
    use \RedePay\Utils\Fillable;

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

    public function setId($id) {
        $this->id = $id;
    }

    public function getDescription() {
        return $this->description;
    }

    public function setDescription($description) {
       $this->description = $description;
    }

    public function getAmount() {
        return $this->amount;
    }

    public function setAmount($amount) {
        $this->amount = $amount;
    }

    public function getQuantity() {
        return $this->quantity;
    }

    public function setQuantity($quantity) {
        $this->quantity = $quantity;
    }

    public function getFreight() {
        return $this->freight;
    }

    public function setFreight($freight) {
        $this->freight = $freight;
    }

    public function getDiscount() {
        return $this->discount;
    }

    public function setDiscount($discount) {
        $this->discount = $discount;
    }
}
