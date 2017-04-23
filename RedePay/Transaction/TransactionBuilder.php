<?php

namespace RedePay\Transaction;

use \RedePay\Customer\Customer;
use \RedePay\Payment\Payment;
use \RedePay\Shipping\Shipping;
use \RedePay\Item\Item;
use \RedePay\History\History;
use \RedePay\Transaction\Transaction;

/**
 * Class TransactionBuilder
 *
 * @author Marjoel Moreira <marjoel@marjoel.com>
 * @license https://www.gnu.org/licenses/gpl-3.0.en.html
 */
trait TransactionBuilder
{
    /**
     * Traits
     */
    use \RedePay\Shipping\ShippingBuilder;

    /**
     * Factory a Transaction object
     *
     * @param \stdClass $data
     * @return \RedePay\Transaction\Transaction
     */
    private function buildTransaction($data)
    {
        $customer = [
            'name' => $data->customerName,
            'email' => $data->customerEmail
        ];

        $data->customer = new Customer((object)$customer);

        $payment = [
            'method' => $data->paymentMethod,
            'cardBrand' => $data->cardBrand,
            'installments' => $data->installments
        ];

        $data->payment = new Payment((object)$payment);

        $data->shipping->trackingNumber = $data->trackingNumber;
        $data->shipping = new Shipping($this->buildShipping($data->shipping));

        foreach ($data->items as $key => $value) {
            $data->items[$key] = new Item($value);
        }

        foreach ($data->statusHistory as $key => $value) {
            $data->statusHistory[$key] = new History($value);
        }
        return new Transaction(get_object_vars($data));
    }
}
