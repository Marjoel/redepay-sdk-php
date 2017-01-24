<?php
namespace RedePay\Order\Request;

class OrderGet implements \RedePay\Utils\RequestInterface {
	private $apiKey;
    private $orderId;

    public function __construct($apiKey, $orderId) {
		$this->apiKey = $apiKey;
        $this->orderId = $orderId;
    }

    public function getPayload() {
        return [];
    }

    public function getPath() {
        return sprintf("%s/orders/%s", $this->getApiUrl(), $this->getId());
    }

    public function getId() {
        return $this->orderId;
    }

    public function getApiKey() {
        return $this->apiKey;
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
