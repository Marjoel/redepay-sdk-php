<?php

namespace RedePay\Shipping;

use RedePay\Address\Address;

/**
 * Class Shipping
 *
 * @author Marjoel Moreira <marjoel@marjoel.com>
 * @license https://www.gnu.org/licenses/gpl-3.0.en.html
 */
class Shipping
{
    /**
     * Traits
     */
    use \RedePay\Utils\Fillable;

    /**
     * The shipping address
     *
     * @var Address
     */
    private $address;

    /**
     * The shipping cost
     *
     * @var float|int
     */
    private $cost;

    /**
     * The shipping tracking number
     *
     * @var string
     */
    private $trackingNumber;

    public function __construct(array $data = null)
    {
        if (isset($data)) {
            $this->fill($data);
        }
    }

    /**
     * Sets the address
     *
     * @param Address $address
     * @return Shipping
     */
    public function setAddress(Address $address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Gets the address
     *
     * @return Address
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Sets the cost
     *
     * @param float|int $cost
     * @return Shipping
     */
    public function setCost($cost)
    {
        $this->cost = $cost;

        return $this;
    }

    /**
     * Gets the cost
     *
     * @return float|int
     */
    public function getCost()
    {
        return $this->cost;
    }

    /**
     * Gets the tracking number
     *
     * @return string
     */
    public function getTrackingNumber()
    {
        return $this->trackingNumber;
    }
}
