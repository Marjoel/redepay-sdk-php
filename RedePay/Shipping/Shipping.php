<?php
namespace RedePay\Shipping;

class Shipping {
	use \RedePay\Utils\Fillable;

	/**
	 * @param Address
     */
	private $address;

	/**
	 * @param String
     */
	private $cost;

	/**
	 * @param Shipping
     */
	public function __construct($data = null) {
		if(isset($data)) {
			$this->fill($data);
		}
	}

	/**
	 * @return Address
     */
	public function getAddress() {
		return $this->address;
	}

	/**
	 * @return String
     */
	public function getCost() {
		return $this->cost;
	}

	/**
	 * @param String
     */
	public function setAddress($address) {
		$this->address = $address;
	}

	/**
	 * @param String
     */
	public function setCost($cost) {
		$this->cost = $cost;
	}
}
