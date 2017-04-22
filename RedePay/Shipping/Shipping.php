<?php

namespace RedePay\Shipping;

/**
 * Class Shipping
 *
 * @author Marjoel Moreira <marjoel@marjoel.com>
 * @license https://www.gnu.org/licenses/gpl-3.0.en.html
 */
class Shipping {
    use \RedePay\Utils\Fillable;

    /**
     * @param Address
     */
    private $address;

    /**
     * @param String
     */
    private $cost;

    /**
     * @param String
     */
    private $trackingNumber;

    /**
     * @param Shipping
     */
    public function __construct($data = null) {
        if(isset($data)) {
            $this->fill($data);
        }
    }

    /**
     * @return Address
     */
    public function getAddress() {
        return $this->address;
    }

    /**
     * @return String
     */
    public function getCost() {
        return $this->cost;
    }

    /**
     * @return String
     */
    public function getTrackingNumber() {
        return $this->trackingNumber;
    }

    /**
     * @param String
     */
    public function setAddress($address) {
        $this->address = $address;
    }

    /**
     * @param String
     */
    public function setCost($cost) {
        $this->cost = $cost;
    }
}
