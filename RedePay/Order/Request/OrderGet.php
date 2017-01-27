<?php
namespace RedePay\Order\Request;

use \RedePay\Utils\RequestInterface;

class OrderGet implements RequestInterface {
	private $orderId;

	public function __construct($orderId) {
		$this->orderId = $orderId;
	}

	public function getPayload() {
		return [];
	}

	public function getPath() {
		return sprintf("%s/orders/%s", $this->getApiUrl(), $this->getOrderId());
	}

	public function getOrderId() {
		return $this->orderId;
	}

	public function getData() {
		return null;
	}

	public function getMethod() {
		return self::HTTP_GET;
	}

	public function getApiUrl() {
		return self::API_URL;
	}
}
