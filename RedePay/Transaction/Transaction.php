<?php
namespace RedePay\Transaction;

class Transaction {
	use \RedePay\Utils\Fillable;

    private $id;
    private $creationDate;
    private $status;
    private $customerName;
    private $customerEmail;
    private $amount;
    private $discount;
    private $paymentMethod;
    private $installments;
    private $referenceId;
    private $tId;
    private $shipping;
    private $nsu;
    private $items;
    private $statusHistory;
    private $trackingNumber;

    public function __construct($data) {
        $this->fill($data);
    }

    public function getId() {
        return $this->id;
    }

    public function getCreationDate() {
        return $this->creationDate;
    }

    public function getStatus() {
        return $this->status;
    }

    public function getCustomerName() {
        return $this->customerName;
    }

    public function getCustomerEmail() {
        return $this->customerEmail;
    }

    public function getAmout() {
        return $this->amout;
    }

    public function getDiscount() {
        return $this->discount;
    }

    public function getPaymentMethod() {
        return $this->paymentMethod;
    }

    public function getInstallments() {
        return $this->installments;
    }

    public function getReferenceId() {
        return $this->referenceId;
    }

    public function getTid() {
        return $this->tId;
    }

    public function getShipping() {
        return $this->shipping;
    }

    public function getNsu() {
        return $this->nsu;
    }

    public function getItems() {
        return $this->items;
    }

    public function getStatusHistory() {
        return $this->statusHistory;
    }

    public function getTrackingNumber() {
        return $this->trackingNumber;
    }
}
