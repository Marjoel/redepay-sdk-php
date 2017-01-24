<?php
namespace RedePay\Order;

class Order {
	use \RedePay\Utils\Fillable;

    private $orderId;
    private $reference;
    private $expiresAt;
    private $status;
    private $customer;
    private $items;
    private $discount;
    private $shipping;
    private $reversalHistory;
    private $transactionHistory;
    private $statusHistory;
    private $trackingNumberHistory;

    public function __construct($data) {
        $this->fill($data);
    }
}
