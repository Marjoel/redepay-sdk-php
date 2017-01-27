<?php
namespace RedePay\Phone;

class Phone {
	use \RedePay\Utils\Fillable;

	/**
	 * @param String
     */
	private $kind;

	/**
	 * @param String
     */
	private $number;

	/**
	 * @param Phone
     */
	public function __construct($data = null) {
		if(isset($data)) {
			$this->fill($data);
		}
	}

	/**
	 * @return String
     */
	public function getKind() {
		return $this->kind;
	}

	/**
	 * @return String
     */
	public function getNumber() {
		return $this->number;
	}

	/**
	 * @param String
     */
	public function setKind($kind) {
		$this->kind = $kind;
	}

	/**
	 * @param String
     */
	public function setNumber($number) {
		$this->number = $number;
	}
}
