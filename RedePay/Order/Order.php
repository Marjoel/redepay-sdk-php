<?php

namespace RedePay\Order;

/**
 * Class Order
 *
 * @author Marjoel Moreira <marjoel@marjoel.com>
 * @license https://www.gnu.org/licenses/gpl-3.0.en.html
 */
class Order {
    use \RedePay\Utils\Fillable;

    /**
     * @param String
     */
    private $id;

    /**
     * @param String
     */
    private $orderId;

    /**
     * @param String
     */
    private $reference;

    /**
     * @param String
     */
    private $status;

    /**
     * @param String
     */
    private $amount;

    /**
     * @param String
     */
    private $creationDate;

    /**
     * @param String
     */
    private $createdAt;

    /**
     * @param String
     */
    private $discount;

    /**
     * @param Customer
     */
    private $customer;

    /**
     * @param Shipping
     */
    private $shipping;

    /**
     * @param Item[]
     */
    private $items;

    /**
     * @param History[]
     */
    private $statusHistory;

    /**
     * @param History[]
     */
    private $transactionHistory;

    /**
     * @param History[]
     */
    private $reversalHistory;

    /**
     * @param Settings
     */
    private $settings;

    /**
     * @param Url[]
     */
    private $urls;

    /**
     * @param Order
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
    public function getReference() {
        return $this->reference;
    }

    /**
     * @return String
     */
    public function getStatus() {
        return $this->status;
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
    public function getCreationDate() {
        return $this->creationDate;
    }

    /**
     * @return String
     */
    public function getDiscount() {
        return $this->discount;
    }

    /**
     * @return Customer
     */
    public function getCustomer() {
        return $this->customer;
    }

    /**
     * @return Shipping
     */
    public function getShipping() {
        return $this->shipping;
    }

    /**
     * @return Items[]
     */
    public function getItems() {
        return $this->items;
    }

    /**
     * @return History[]
     */
    public function getStatusHistory() {
        return $this->statusHistory;
    }

    /**
     * @return History[]
     */
    public function getTransactionHistory() {
        return $this->transactionHistory;
    }

    /**
     * @return History[]
     */
    public function getReversalHistory() {
        return $this->reversalHistory;
    }

    /**
     * @return Settings
     */
    public function getSettings() {
        return $this->settings;
    }

    /**
     * @return Url[]
     */
    public function getUrls() {
        return $this->urls;
    }

    /**
     * @param String
     */
    public function setReference($reference) {
        $this->reference = $reference;
    }

    /**
     * @param Customer
     */
    public function setCustomer($customer) {
        $this->customer = $customer;
    }

    /**
     * @param Item[]
     */
    public function setItems($items) {
        $this->items = $items;
    }

    /**
     * @param String
     */
    public function setDiscount($discount) {
        $this->discount = $discount;
    }

    /**
     * @param Shipping
     */
    public function setShipping($shipping) {
        $this->shipping = $shipping;
    }

    /**
     * @param Settings
     */
    public function setSettings($settings) {
        $this->settings = $settings;
    }

    /**
     * @param Url[]
     */
    public function setUrls($urls) {
        $this->urls = $urls;
    }
}
