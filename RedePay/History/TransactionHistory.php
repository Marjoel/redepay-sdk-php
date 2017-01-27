<?php
namespace RedePay\History;

class TransactionHistory {
	use \RedePay\Utils\Fillable;

	private $id;
	private $date;
	private $status;
	private $transactionHistory;

	public function __construct($data = null) {
		if(isset($data)) {
			$this->fill($data);
		}
	}

	public function getId() {
		return $this->id;
	}

	public function getDate() {
		return $this->date;
	}

	public function getTransactionHistory() {
		return $this->transactionHistory;
	}
}
