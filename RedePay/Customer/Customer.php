<?php
namespace RedePay\Customer;

class Customer {
	use \RedePay\Utils\Fillable;

	private $name;
	private $email;
	private $documents;
	private $phones;

	public function __construct($data = null) {
		if(isset($data)) {
			$this->fill($data);
		}
	}

	public function getName() {
		return $this->name;
	}

	public function getEmail() {
		return $this->email;
	}

	public function getDocuments() {
		return $this->documents;
	}

	public function getPhones() {
		return $this->phones;
	}

	public function setName($name) {
		$this->name = $name;
	}

	public function setEmail($email) {
		$this->email = $email;
	}

	public function setDocuments($documents) {
		$this->documents = $documents;
	}

	public function setPhones($phones) {
		$this->phones = $phones;
	}
}
