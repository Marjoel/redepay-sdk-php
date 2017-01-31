<?php
/**
*  @author   Marjoel Moreira [marjoel@marjoel.com]
*  @license  https://www.gnu.org/licenses/gpl-3.0.en.html
*/

namespace RedePay\Item;

class Item {
    use \RedePay\Utils\Fillable;

    /**
     * @param String
     */
    private $id;

    /**
     * @param String
     */
    private $description;

    /**
     * @param integer
     */
    private $amount;

    /**
     * @param integer
     */
    private $quantity;

    /**
     * @param integer
     */
    private $freight;

    /**
     * @param integer
     */
    private $discount;

    /**
     * @param Item
     */
    public function __construct($data = null) {
        if(isset($data)) {
            $this->fill($data);
        }
    }

    /**
     * @return String
     */
    public function getId() {
        return $this->id;
    }

    /**
     * @return String
     */
    public function getDescription() {
        return $this->description;
    }

    /**
     * @return integer
     */
    public function getAmount() {
        return $this->amount;
    }

    /**
     * @return integer
     */
    public function getQuantity() {
        return $this->quantity;
    }

    /**
     * @return integer
     */
    public function getFreight() {
        return $this->freight;
    }

    /**
     * @return integer
     */
    public function getDiscount() {
        return $this->discount;
    }

    /**
     * @param String
     */
    public function setId($id) {
        $this->id = $id;
    }

    /**
     * @param String
     */
    public function setDescription($description) {
        $this->description = $description;
    }

    /**
     * @param integer
     */
    public function setAmount($amount) {
        if(is_numeric($amount)) {
           $this->amount = $amount; 
        }
        else {
            throw new \InvalidArgumentException($amount ." is not a valid number value");
        }
    }

    /**
     * @param integer
     */
    public function setQuantity($quantity) {
        if(is_numeric($quantity)) {
           $this->quantity = $quantity; 
        }
        else {
            throw new \InvalidArgumentException($quantity ." is not a valid number value");
        }
    }

    /**
     * @param integer
     */
    public function setFreight($freight) {
        if(is_numeric($freight)) {
           $this->freight = $freight; 
        }
        else {
            throw new \InvalidArgumentException($freight ." is not a valid number value");
        }
    }

    /**
     * @param integer
     */
    public function setDiscount($discount) {
        if(is_numeric($discount)) {
           $this->discount = $discount; 
        }
        else {
            throw new \InvalidArgumentException($discount ." is not a valid number value");
        }
    }
}
