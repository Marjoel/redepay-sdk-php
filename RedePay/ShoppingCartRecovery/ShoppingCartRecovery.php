<?php
namespace RedePay\ShoppingCartRecovery;

class ShoppingCartRecovery {
	use \RedePay\Utils\Fillable;

	private $enable;
	private $firstAlert;
	private $secondAlert;
	private $thirdAlert;
	private $fourthAlert;
	private $logoUrl;

	public function __construct($data = null) {
		if(isset($data)) {
			$this->fill($data);
		}
	}

	public function getEnable() {
		return $this->enable;
	}

	public function getFirstAlert() {
		return $this->firstAlert;
	}

	public function getSecondAlert() {
		return $this->secondAlert;
	}

	public function getThirdAlert() {
		return $this->thirdAlert;
	}

	public function getFourthAlert() {
		return $this->fourthAlert;
	}

	public function getLogoUrl() {
		return $this->logoUrl;
	}
}
