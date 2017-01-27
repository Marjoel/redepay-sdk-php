<?php
namespace RedePay\Document;

class Document {
	use \RedePay\Utils\Fillable;

	private $kind;
	private $number;

	public function __construct($data = null) {
		if(isset($data)) {
			$this->fill($data);
		}
	}

	public function getKind() {
		return $this->kind;
	}

	public function getNumber() {
		return $this->number;
	}

	public function setKind($kind) {
		$this->kind = $kind;
	}

	public function setNumber($number) {
		$this->number = $number;
	}
}
