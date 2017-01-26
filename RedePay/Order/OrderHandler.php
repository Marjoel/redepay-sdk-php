<?php
namespace RedePay\Order;

class OrderHandler {
	use \RedePay\Utils\Client;
	use OrderBuilder;

	private $apiKey;

	public function __construct($apiKey) {
		$this->apiKey = $apiKey;
    }

    public function get($orderId) {
        $request = new Request\OrderGet($this->apiKey, $orderId);
		$response = $this->send($request);
		return $this->buildOrder($response);
    }

    public function create($order) {
        $request = new Request\OrderCreate($this->apiKey, $order);
		$response = $this->send($request);
		return $this->buildOrder($response);
    }
}
