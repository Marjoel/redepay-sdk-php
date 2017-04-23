<?php

namespace RedePay\Transaction;

use RedePay\History\History;
use RedePay\Item\Item;
use \RedePay\Payment\Payment;
use \RedePay\Customer\Customer;
use RedePay\Shipping\Shipping;

/**
 * Class Transaction
 *
 * @author Marjoel Moreira <marjoel@marjoel.com>
 * @license https://www.gnu.org/licenses/gpl-3.0.en.html
 */
class Transaction
{
    /**
     * Traits
     */
    use \RedePay\Utils\Fillable;

    /**
     * The transaction ID
     *
     * @var string
     */
    private $id;

    /**
     * The transaction reference
     *
     * @var string
     */
    private $reference;

    /**
     * The transaction status
     *
     * @var string
     */
    private $status;

    /**
     * The transaction amount
     *
     * @var float
     */
    private $amount;

    /**
     * The transaction discount amount
     *
     * @var float
     */
    private $discount;

    /**
     * The transaction creation date
     *
     * @var string
     */
    private $creationDate;

    /**
     * The Customer object
     *
     * @var Customer
     */
    private $customer;

    /**
     * The Payment object
     *
     * @var Payment
     */
    private $payment;

    /**
     * The Shipping object
     *
     * @var Shipping
     */
    private $shipping;

    /**
     * The items array
     *
     * @var Item[]
     */
    private $items;

    /**
     * The transaction status history
     *
     * @var History[]
     */
    private $statusHistory;

    /**
     * The payment method
     *
     * @var string
     */
    private $paymentMethod;

    /**
     * The card brand
     *
     * @var string
     */
    private $cardBrand;

    /**
     * The installments number
     *
     * @var int
     */
    private $installments;

    /**
     * The customer name
     *
     * @var string
     */
    private $customerName;

    /**
     * The customer email
     * @var string
     */
    private $customerEmail;

    /**
     * Transaction constructor.
     *
     * @param array|null $data The default data to be filled in the current Transaction object
     */
    public function __construct(array $data = null)
    {
        if (isset($data)) {
            $this->fill($data);
        }
    }

    /**
     * Gets the transaction ID
     *
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Gets the transaction reference
     *
     * @return string
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * Gets the transaction status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Gets the transaction total amount
     *
     * @return float
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Gets the transaction discount amount
     *
     * @return float
     */
    public function getDiscount()
    {
        return $this->discount;
    }

    /**
     * Gets the transaction creation date
     *
     * @return string
     */
    public function getCreationDate()
    {
        return $this->creationDate;
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
     * Gets the Payment
     *
     * @return Payment
     */
    public function getPayment()
    {
        return new $this->payment;
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
     * Gets the items array
     *
     * @return Item[]
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * Gets the transaction status history
     *
     * @return History[]
     */
    public function getStatusHistory()
    {
        return $this->statusHistory;
    }
}
