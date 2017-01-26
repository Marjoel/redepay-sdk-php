<?php
namespace RedePay\Order;

class Order {
	use \RedePay\Utils\Fillable;

    private $id;
    private $orderId;
    private $reference;
    private $createdAt;
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
    private $settings;
    private $urls;

    public function __construct($data) {
        $this->fill($data);
    }
	
	public function getId() {
		return $this->id;
	}
	
	public function getOrderId() {
		return $this->orderId;
	}
	
	public function getCreatedAt() {
		return $this->createdAt;
	}

	public function getReference() {
		return $this->reference;
	}

	public function getExpiresAt() {
		return $this->expiresAt;
	}

	public function getStatus() {
		return $this->status;
	}

	public function getCustomer() {
		return $this->customer;
	}

	public function getItems() {
		return $this->items;
	}

	public function getDiscount() {
		return $this->discount;
	}

	public function getShipping() {
		return $this->shipping;
	}

	public function getReversalHistory() {
		return $this->reversalHistory;
	}

	public function getTransactionHistory() {
		return $this->transactionHistory;
	}

	public function getStatusHistory() {
		return $this->statusHistory;
	}

	public function getTrackingNumberHistory() {
		return $this->trackingNumberHistory;
	}

	public function getSettings() {
		return $this->settings;
	}

	public function getUrls() {
		return $this->urls;
	}

	public function setOrderId($orderId) {
		$this->orderId = $orderId;
	}

	public function setReference($reference) {
		$this->reference = $reference;
	}

	public function setExpiresAt($expiresAt) {
		$this->expiresAt = $expiresAt;
	}

	public function setStatus($status) {
		$this->status = $status;
	}

	public function setCustomer($customer) {
		$this->customer = $customer;
	}

	public function setItems($items) {
		$this->items = $items;
	}

	public function setDiscount($discount) {
		$this->discount = $discount;
	}

	public function setShipping($shipping) {
		$this->shipping = $shipping;
	}

	public function setReversalHistory($reversalHistory) {
		$this->reversalHistory = $reversalHistory;
	}

	public function setTransactionHistory($transactionHistory) {
		$this->transactionHistory = $transactionHistory;
	}

	public function setStatusHistory($statusHistory) {
		$this->statusHistory = $statusHistory;
	}

	public function setTrackingNumberHistory($trackingNumberHistory) {
		$this->trackingNumberHistory = $trackingNumberHistory;
	}

	public function setSettings($settings) {
		$this->settings = $settings;
	}

	public function setUrls($urls) {
		$this->urls = $urls;
	}
}
