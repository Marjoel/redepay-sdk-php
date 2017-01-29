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
     * @param String
     */
    private $amount;

    /**
     * @param String
     */
    private $quantity;

    /**
     * @param String
     */
    private $freight;

    /**
     * @param String
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
     * @return String
     */
    public function getAmount() {
        return $this->amount;
    }

    /**
     * @return String
     */
    public function getQuantity() {
        return $this->quantity;
    }

    /**
     * @return String
     */
    public function getFreight() {
        return $this->freight;
    }

    /**
     * @return String
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
     * @param String
     */
    public function setAmount($amount) {
        $this->amount = $amount;
    }

    /**
     * @param String
     */
    public function setQuantity($quantity) {
        $this->quantity = $quantity;
    }

    /**
     * @param String
     */
    public function setFreight($freight) {
        $this->freight = $freight;
    }

    /**
     * @param String
     */
    public function setDiscount($discount) {
        $this->discount = $discount;
    }
}
