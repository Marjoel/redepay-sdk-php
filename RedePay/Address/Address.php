<?php
namespace RedePay\Address;

class Address {
	use \RedePay\Utils\Fillable;

	/**
	 * @param String
	 */
	private $alias;

	/**
	 * @param String
	 */
	private $street;

	/**
	 * @param String
	 */
	private $number;

	/**
	 * @param String
	 */
	private $complement;

	/**
	 * @param String
	 */
	private $postalCode;

	/**
	 * @param String
	 */
	private $district;

	/**
	 * @param String
	 */
	private $city;

	/**
	 * @param String
	 */
	private $state;

	/**
	 * @param Address
	 */
	public function __construct($data = null) {
		if(isset($data)) {
			$this->fill($data);
		}
	}

	/**
	 * @return String
	 */
	public function getAlias() {
		return $this->alias;
	}

	/**
	 * @return String
	 */
	public function getStreet() {
		return $this->street;
	}

	/**
	 * @return String
	 */
	public function getNumber() {
		return $this->number;
	}

	/**
	 * @return String
	 */
	public function getComplement() {
		return $this->complement;
	}

	/**
	 * @return String
	 */
	public function getPostalCode() {
		return $this->postalCode;
	}

	/**
	 * @return String
	 */
	public function getDistrict() {
		return $this->district;
	}

	/**
	 * @return String
	 */
	public function getCity() {
		return $this->city;
	}

	/**
	 * @return String
	 */
	public function getState() {
		return $this->state;
	}

	/**
	 * @param String
	 */
	public function setAlias($alias) {
		$this->alias = $alias;
	}

	/**
	 * @param String
	 */
	public function setStreet($street) {
		$this->street = $street;
	}

	/**
	 * @param String
	 */
	public function setNumber($number) {
		$this->number = $number;
	}

	/**
	 * @param String
	 */
	public function setComplement($complement) {
		$this->complement = $complement;
	}

	/**
	 * @param String
	 */
	public function setPostalCode($postalCode) {
		$this->postalCode = $postalCode;
	}

	/**
	 * @param String
	 */
	public function setDistrict($district) {
		$this->district = $district;
	}

	/**
	 * @param String
	 */
	public function setCity($city) {
		$this->city = $city;
	}

	/**
	 * @param String
	 */
	public function setState($state) {
		$this->state = $state;
	}
}
