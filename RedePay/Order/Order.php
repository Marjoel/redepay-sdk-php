<?php
namespace RedePay\Order;

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
	private $createdAt;

	/**
	 * @param String
	 */
	private $expiresAt;

	/**
	 * @param String
	 */
	private $status;

	/**
	 * @param Customer
	 */
	private $customer;

	/**
	 * @param Item[]
	 */
	private $items;

	/**
	 * @param String
	 */
	private $discount;

	/**
	 * @param Shipping
	 */
	private $shipping;

	/**
	 * @param ReversalHistory[]
	 */
	private $reversalHistory;

	/**
	 * @param TransactionHistory[]
	 */
	private $transactionHistory;

	/**
	 * @param StatusHistory[]
	 */
	private $statusHistory;

	/**
	 * @param String
	 */
	private $trackingNumberHistory;

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
	public function getOrderId() {
		return $this->orderId;
	}

	/**
	 * @return String
	 */
	public function getCreatedAt() {
		return $this->createdAt;
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
	public function getExpiresAt() {
		return $this->expiresAt;
	}

	/**
	 * @return String
	 */
	public function getStatus() {
		return $this->status;
	}

	/**
	 * @return Customer
	 */
	public function getCustomer() {
		return $this->customer;
	}

	/**
	 * @return Items[]
	 */
	public function getItems() {
		return $this->items;
	}

	/**
	 * @return String
	 */
	public function getDiscount() {
		return $this->discount;
	}

	/**
	 * @return Shipping
	 */
	public function getShipping() {
		return $this->shipping;
	}

	/**
	 * @return ReversalHistory[]
	 */
	public function getReversalHistory() {
		return $this->reversalHistory;
	}

	/**
	 * @return TransactionHistory[]
	 */
	public function getTransactionHistory() {
		return $this->transactionHistory;
	}

	/**
	 * @return StatusHistory[]
	 */
	public function getStatusHistory() {
		return $this->statusHistory;
	}

	/**
	 * @return String
	 */
	public function getTrackingNumberHistory() {
		return $this->trackingNumberHistory;
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
	public function setOrderId($orderId) {
		$this->orderId = $orderId;
	}

	/**
	 * @param String
	 */
	public function setReference($reference) {
		$this->reference = $reference;
	}

	/**
	 * @param String
	 */
	public function setExpiresAt($expiresAt) {
		$this->expiresAt = $expiresAt;
	}

	/**
	 * @param String
	 */
	public function setStatus($status) {
		$this->status = $status;
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
	 * @param ReversalHistory[]
	 */
	public function setReversalHistory($reversalHistory) {
		$this->reversalHistory = $reversalHistory;
	}

	/**
	 * @param TransactionHistory[]
	 */
	public function setTransactionHistory($transactionHistory) {
		$this->transactionHistory = $transactionHistory;
	}

	/**
	 * @param StatusHistory[]
	 */
	public function setStatusHistory($statusHistory) {
		$this->statusHistory = $statusHistory;
	}

	/**
	 * @param String
	 */
	public function setTrackingNumberHistory($trackingNumberHistory) {
		$this->trackingNumberHistory = $trackingNumberHistory;
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
