<?php
namespace RedePay\Url;

class Url {
	use \RedePay\Utils\Fillable;

	private $kind;
	private $url;

	public function __construct($data = null) {
		if(isset($data)) {
			$this->fill($data);
		}
	}

	public function getKind() {
		return $this->kind;
	}

	public function getUrl() {
		return $this->url;
	}

	public function setKind($kind) {
		$this->kind = $kind;
	}

	public function setUrl($url) {
		$this->url = $url;
	}
}
