<?php

namespace RedePay\Order;

use \RedePay\Shipping\Shipping;
use \RedePay\Customer\Customer;
use \RedePay\Item\Item;
use \RedePay\History\History;
use \RedePay\Order\Order;

/**
 * Class OrderBuilder
 *
 * @author Marjoel Moreira <marjoel@marjoel.com>
 * @license https://www.gnu.org/licenses/gpl-3.0.en.html
 */
trait OrderBuilder
{
    /**
     * Traits
     */
    use \RedePay\Shipping\ShippingBuilder;

    /**
     * Factory an Order object
     *
     * @param \stdClass $data
     * @return \RedePay\Order\Order
     */
    private function buildOrder($data)
    {
        if (isset($data->orderId)) {
            $data->id = $data->orderId;
        }

        if (isset($data->createdAt)) {
            $data->creationDate = $data->createdAt;
        }

        if (isset($data->shipping)) {
            $data->shipping = new Shipping($this->buildShipping($data->shipping));
        }

        if (isset($data->customer)) {
            $data->customer = new Customer($data->customer);
        }

        if (isset($data->items)) {
            foreach ($data->items as $key => $value) {
                $data->items[$key] = new Item($value);
            }
        }

        if (isset($data->statusHistory)) {
            foreach ($data->statusHistory as $key => $value) {
                $data->statusHistory[$key] = new History($value);
            }
        }

        if (isset($data->transactionHistory)) {
            foreach ($data->transactionHistory as $key => $value) {
                $data->transactionHistory[$key] = new History($value);
            }
        }

        if (isset($data->reversalHistory)) {
            foreach ($data->reversalHistory as $key => $value) {
                $data->reversalHistory[$key] = new History($value);
            }
        }
        return new Order(get_object_vars($data));
    }
}
