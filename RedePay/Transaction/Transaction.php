<?php
namespace RedePay\Transaction;

class Transaction {
	use \RedePay\Utils\Fillable;

	/**
	 * @param String
     */
	private $id;

	/**
	 * @param String
     */
	private $creationDate;

	/**
	 * @param String
     */
	private $status;

	/**
	 * @param String
     */
	private $customerName;

	/**
	 * @param String
     */
	private $customerEmail;

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
	private $paymentMethod;

	/**
	 * @param String
     */
	private $installments;

	/**
	 * @param String
     */
	private $referenceId;

	/**
	 * @param String
     */
	private $tId;

	/**
	 * @param Shipping
     */
	private $shipping;

	/**
	 * @param String
     */
	private $nsu;

	/**
	 * @param Item[]
     */
	private $items;

	/**
	 * @param StatusHistory[]
     */
	private $statusHistory;

	/**
	 * @param String
     */
	private $trackingNumber;

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
	public function getCreationDate() {
		return $this->creationDate;
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
	public function getCustomerName() {
		return $this->customerName;
	}

	/**
	 * @return String
     */
	public function getCustomerEmail() {
		return $this->customerEmail;
	}

	/**
	 * @return String
     */
	public function getAmout() {
		return $this->amout;
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
	public function getPaymentMethod() {
		return $this->paymentMethod;
	}

	/**
	 * @return String
     */
	public function getInstallments() {
		return $this->installments;
	}

	/**
	 * @return String
     */
	public function getReferenceId() {
		return $this->referenceId;
	}

	/**
	 * @return String
     */
	public function getTid() {
		return $this->tId;
	}

	/**
	 * @return Shipping
     */
	public function getShipping() {
		return $this->shipping;
	}

	/**
	 * @return String
     */
	public function getNsu() {
		return $this->nsu;
	}

	/**
	 * @return Item[]
     */
	public function getItems() {
		return $this->items;
	}

	/**
	 * @return StatusHistory
     */
	public function getStatusHistory() {
		return $this->statusHistory;
	}

	/**
	 * @return String
     */
	public function getTrackingNumber() {
		return $this->trackingNumber;
	}
}
