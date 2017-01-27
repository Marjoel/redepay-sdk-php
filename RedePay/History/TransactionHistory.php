<?php
namespace RedePay\History;

class TransactionHistory {
	use \RedePay\Utils\Fillable;

	/**
	 * @param String
	 */
	private $id;

	/**
	 * @param String
	 */
	private $date;

	/**
	 * @param String
	 */
	private $status;

	/**
	 * @param TransactionHistory
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
	public function getDate() {
		return $this->date;
	}
}
