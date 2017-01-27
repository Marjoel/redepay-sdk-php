<?php
namespace RedePay\Settings;

class Settings {
	use \RedePay\Utils\Fillable;

	private $expiresAt;
	private $maxInstallments;
	private $attempts;
	private $shoppingCartRecovery;

	public function __construct($data = null) {
		if(isset($data)) {
			$this->fill($data);
		}
	}

	public function getExpiresAt() {
		return $this->expiresAt;
	}

	public function getMaxInstallments() {
		return $this->maxInstallments;
	}

	public function getAttempts() {
		return $this->attempts;
	}

	public function getShoppingCartRecovery() {
		return $this->shoppingCartRecovery;
	}

	public function setExpiresAt($expiresAt) {
		$this->expiresAt = $expiresAt;
	}

	public function setMaxInstallments($maxInstallments) {
		$this->maxInstallments = $maxInstallments;
	}

	public function setAttempts($attempts) {
		$this->attempts = $attempts;
	}

	public function setShoppingCartRecovery($shoppingCartRecovery) {
		$this->shoppingCartRecovery = $shoppingCartRecovery;
	}
}
