<?php
namespace RedePay\Payment;

class Payment {
	use \RedePay\Utils\Fillable;

	/**
	 * @param String
	 */
	private $method;

	/**
	 * @param String
	 */
	private $cardBrand;

	/**
	 * @param String
	 */
	private $installments;

	/**
	 * @param Payment
	 */
	public function __construct($data = null) {
		if(isset($data)) {
			$this->fill($data);
		}
	}

	/**
	 * @param String
	 */
	public function getMethod() {
		return $this->method;
	}

	/**
	 * @param String
	 */
	public function getCardBrand() {
		return $this->cardBrand;
	}

	/**
	 * @return String
	 */
	public function getInstallments() {
		return $this->installments;
	}
}
