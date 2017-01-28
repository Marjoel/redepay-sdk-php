<?php
namespace RedePay\History;

class StatusHistory {
	use \RedePay\Utils\Fillable;

	/**
	 * @param String
	 */
	private $status;

	/**
	 * @param String
	 */
	private $date;

	/**
	 * @param StatusHistory
	 */
	public function __construct($data = null) {
		if(isset($data)) {
			$this->fill($data);
		}
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
	public function getDate() {
		return $this->date;
	}
}
