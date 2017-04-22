<?php

namespace RedePay\Transaction;

use \RedePay\Payment\Payment;
use \RedePay\Customer\Customer;

/**
 * Class Transaction
 *
 * @author Marjoel Moreira <marjoel@marjoel.com>
 * @license https://www.gnu.org/licenses/gpl-3.0.en.html
 */
class Transaction {
    use \RedePay\Utils\Fillable;

    /**
     * @param String
     */
    private $id;

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
    private $discount;

    /**
     * @param String
     */
    private $creationDate;

    /**
     * @param Customer
     */
    private $customer;

    /**
     * @param Payment
     */
    private $payment;

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
     * @param String
     */
    private $paymentMethod;

    /**
     * @param String
     */
    private $cardBrand;

    /**
     * @param String
     */
    private $installments;

    /**
     * @param String
     */
    private $customerName;

    /**
     * @param String
     */
    private $customerEmail;

    /**
     * @param Transaction
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
    public function getDiscount() {
        return $this->discount;
    }

    /**
     * @return String
     */
    public function getCreationDate() {
        return $this->creationDate;
    }

    /**
     * @return Customer
     */
    public function getCustomer() {
        return $this->customer;
    }

    /**
     * @return Payment
     */
    public function getPayment() {
        return new $this->payment;
    }

    /**
     * @return Shipping
     */
    public function getShipping() {
        return $this->shipping;
    }

    /**
     * @return Item[]
     */
    public function getItems() {
        return $this->items;
    }

    /**
     * @return History
     */
    public function getStatusHistory() {
        return $this->statusHistory;
    }
}
