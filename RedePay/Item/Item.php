<?php

namespace RedePay\Item;

/**
 * Class Item
 *
 * @author Marjoel Moreira <marjoel@marjoel.com>
 * @license https://www.gnu.org/licenses/gpl-3.0.en.html
 */
class Item
{
    /**
     * Traits
     */
    use \RedePay\Utils\Fillable;

    /**
     * The item ID
     *
     * @var string
     */
    private $id;

    /**
     * The item description
     *
     * @var string
     */
    private $description;

    /**
     * The item amount
     *
     * @var float|int
     */
    private $amount;

    /**
     * The item quantity
     *
     * @var int
     */
    private $quantity;

    /**
     * The item freight amount
     *
     * @var float|int
     */
    private $freight;

    /**
     * The item discount amount
     *
     * @var float|int
     */
    private $discount;

    /**
     * Item constructor.
     *
     * @param array|null $data The default data to be filled in the current Item object
     */
    public function __construct(array $data = null)
    {
        if (isset($data)) {
            $this->fill($data);
        }
    }

    /**
     * Sets the ID
     *
     * @param string $id
     * @return Item
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Gets the ID
     *
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets the description
     *
     * @param string $description
     * @return Item
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Gets the description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets the item amount
     *
     * @param float|int $amount
     * @throws \InvalidArgumentException
     * @return Item
     */
    public function setAmount($amount)
    {
        if (is_numeric($amount)) {
            $this->amount = $amount;
        } else {
            throw new \InvalidArgumentException($amount ." is not a valid number value");
        }

        return $this;
    }

    /**
     * Gets the item amount
     *
     * @return float|int
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Sets the quantity
     *
     * @param int $quantity
     * @throws \InvalidArgumentException
     * @return Item
     */
    public function setQuantity($quantity)
    {
        if (is_numeric($quantity)) {
            $this->quantity = $quantity;
        } else {
            throw new \InvalidArgumentException($quantity ." is not a valid number value");
        }

        return $this;
    }

    /**
     * Gets the quantity
     *
     * @return int
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Sets the freight amount
     *
     * @param float|int $freight
     * @throws \InvalidArgumentException
     * @return Item
     */
    public function setFreight($freight)
    {
        if (is_numeric($freight)) {
            $this->freight = $freight;
        } else {
            throw new \InvalidArgumentException($freight ." is not a valid number value");
        }

        return $this;
    }

    /**
     * Gets the freight amount
     *
     * @return float|int
     */
    public function getFreight()
    {
        return $this->freight;
    }

    /**
     * Sets the discount amount
     *
     * @param float|int $discount
     * @throws \InvalidArgumentException
     * @return Item
     */
    public function setDiscount($discount)
    {
        if (is_numeric($discount)) {
            $this->discount = $discount;
        } else {
            throw new \InvalidArgumentException($discount ." is not a valid number value");
        }

        return $this;
    }

    /**
     * Gets the discount amount
     *
     * @return float|int
     */
    public function getDiscount()
    {
        return $this->discount;
    }
}
