<?php

namespace RedePay\Order;

use RedePay\Customer\Customer;
use RedePay\History\History;
use RedePay\Item\Item;
use RedePay\Settings\Settings;
use RedePay\Shipping\Shipping;
use RedePay\Url\Url;

/**
 * Class Order
 *
 * @author Marjoel Moreira <marjoel@marjoel.com>
 * @license https://www.gnu.org/licenses/gpl-3.0.en.html
 */
class Order
{
    /**
     * Traits
     */
    use \RedePay\Utils\Fillable;

    /**
     * The order ID
     *
     * @var string
     */
    private $id;

    /**
     * Alias to $id
     *
     * @var string
     */
    private $orderId;

    /**
     * The order reference
     *
     * @var string
     */
    private $reference;

    /**
     * The order status
     *
     * @var string
     */
    private $status;

    /**
     * The order total amount
     *
     * @var string
     */
    private $amount;

    /**
     * The order creation date
     *
     * @var string
     */
    private $creationDate;

    /**
     * Alias to $creationDate
     *
     * @var string
     */
    private $createdAt;

    /**
     * The order discount amount
     *
     * @var float|int
     */
    private $discount;

    /**
     * The Customer
     *
     * @var Customer
     */
    private $customer;

    /**
     * The Shipping
     *
     * @var Shipping
     */
    private $shipping;

    /**
     * The order Items
     *
     * @var Item[]
     */
    private $items;

    /**
     * The order status history
     *
     * @var History[]
     */
    private $statusHistory;

    /**
     * The order transaction history
     *
     * @var History[]
     */
    private $transactionHistory;

    /**
     * The order reversal history
     *
     * @var History[]
     */
    private $reversalHistory;

    /**
     * The order settings
     *
     * @var Settings
     */
    private $settings;

    /**
     * The order URLs
     *
     * @var Url[]
     */
    private $urls;

    /**
     * Order constructor.
     *
     * @param array|null $data The default data to be filled in the current Order object
     */
    public function __construct(array $data = null)
    {
        if (isset($data)) {
            $this->fill($data);
        }
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
     * Sets the reference
     *
     * @param string $reference
     * @return Order
     */
    public function setReference($reference)
    {
        $this->reference = $reference;

        return $this;
    }

    /**
     * Gets the reference
     *
     * @return string
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * Gets the status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Gets the amount
     *
     * @return string
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Gets the creation date
     *
     * @return string
     */
    public function getCreationDate()
    {
        return $this->creationDate;
    }

    /**
     * Sets the discount amount
     *
     * @param float|int $discount
     * @return Order
     */
    public function setDiscount($discount)
    {
        if (is_numeric($discount)) {
            $this->discount = $discount;
        } else {
            throw new \InvalidArgumentException($discount . ' is not a valid number value');
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

    /**
     * Sets the Customer
     *
     * @param Customer $customer
     * @return Order
     */
    public function setCustomer(Customer $customer)
    {
        $this->customer = $customer;

        return $this;
    }

    /**
     * Gets the Customer
     *
     * @return Customer
     */
    public function getCustomer()
    {
        return $this->customer;
    }

    /**
     * Sets the Shipping
     *
     * @param Shipping $shipping
     * @return Order
     */
    public function setShipping(Shipping $shipping)
    {
        $this->shipping = $shipping;

        return $this;
    }

    /**
     * Gets the Shipping
     *
     * @return Shipping
     */
    public function getShipping()
    {
        return $this->shipping;
    }

    /**
     * Sets the items array
     *
     * @param array $items
     * @return Order
     */
    public function setItems(array $items)
    {
        $this->items = $items;

        return $this;
    }

    /**
     * Gets the items array
     *
     * @return Item[]
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * Gets the status history
     *
     * @return History[]
     */
    public function getStatusHistory()
    {
        return $this->statusHistory;
    }

    /**
     * Gets the transaction history
     *
     * @return History[]
     */
    public function getTransactionHistory()
    {
        return $this->transactionHistory;
    }

    /**
     * Gets the reversal history
     *
     * @return History[]
     */
    public function getReversalHistory()
    {
        return $this->reversalHistory;
    }

    /**
     * Sets the Settings
     *
     * @param Settings $settings
     * @return Order
     */
    public function setSettings(Settings $settings)
    {
        $this->settings = $settings;

        return $this;
    }

    /**
     * Gets the Settings
     *
     * @return Settings
     */
    public function getSettings()
    {
        return $this->settings;
    }

    /**
     * Sets the urls array
     *
     * @param array $urls
     * @return Order
     */
    public function setUrls(array $urls)
    {
        $this->urls = $urls;

        return $this;
    }

    /**
     * Gets the urls array
     *
     * @return Url[]
     */
    public function getUrls()
    {
        return $this->urls;
    }
}
