<?php
namespace RedePay\History;

class ReversalHistory {
	use \RedePay\Utils\Fillable;

	/**
	 * @param String
	 */
	private $value;

	/**
	 * @param String
	 */
	private $date;

	/**
	 * @param ReversalHistory
	 */
	public function __construct($data = null) {
		if(isset($data)) {
			$this->fill($data);
		}
	}

	/**
	 * @return String
	 */
	public function getValue() {
		return $this->value;
	}

	/**
	 * @return String
	 */
	public function getDate() {
		return $this->date;
	}
}
