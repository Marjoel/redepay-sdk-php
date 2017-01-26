<?php
namespace RedePay\Order\Request;

class OrderCreate implements \RedePay\Utils\RequestInterface {
	private $apiKey;
	private $order;

	public function __construct($apiKey, $order) {
		$this->apiKey = $apiKey;
		$this->order = $order;
}

	public function getPayload() {
		$reference = $this->order->getReference();
		$discount = $this->order->getDiscount();
		$settings = $this->handleSettings($this->order);
		$customer = $this->handleCustomer($this->order);
		$shipping = $this->handleShipping($this->order);
		$items = $this->handleItems($this->order);
		$urls = $this->handleUrls($this->order);
		
		$parameters = array(
			"reference" => $reference,
			"discount" => $discount,
			"settings" => $settings,
			"customer" => $customer,
			"shipping" => $shipping,
			"items" => $items,
			"urls" => $urls
		);

		if(!$discount || $discount == 0) {
			unset($parameters["discount"]);
		}

		if(empty($settings)) {
			unset($parameters["settings"]);
		}

		if(empty($customer)) {
			unset($parameters["customer"]);
		}

		if(empty($shipping)) {
			unset($parameters["shipping"]);
		}

		if(empty($urls)) {
			unset($parameters["urls"]);
		}
		return json_encode($parameters, JSON_UNESCAPED_UNICODE);
	}

	public function getPath() {
		return sprintf("%s/orders", $this->getApiUrl());
	}

	public function getApiKey() {
		return $this->apiKey;
	}

	public function getData() {
		return null;
	}

	public function getMethod() {
		return self::HTTP_POST;
	}

	public function getApiUrl() {
		return self::API_URL;
	}

	private function handleCustomer($order) {
		$name = $order->getCustomer()->getName();
		$email = $order->getCustomer()->getEmail();
		$documents = $this->handleDocuments($order);
		$phones = $this->handlePhones($order);

		$parameters = array(
			"name" => $name,
			"email" => $email,
			"documents" => $documents,
			"phones" => $phones
		);
		return $parameters;
	}

	private function handleSettings($order) {
		$expiresAt = $order->getSettings()->getExpiresAt();
		$maxInstallments = $order->getSettings()->getMaxInstallments();
		$attempts = $order->getSettings()->getAttempts();
		$shoppingCartRecovery = $this->handleShoppingCartRecovery($order);
		
		$parameters = array(
			"expiresAt" => $expiresAt,
			"maxInstallments" => $maxInstallments,
			"attempts" => $attempts,
			"shoppingCartRecovery" => $shoppingCartRecovery
		);

		if(!$expiresAt) {
			unset($parameters["expiresAt"]);
		}

		if(!$attempts) {
			unset($parameters["attempts"]);
		}

		if(empty($shoppingCartRecovery)) {
			unset($parameters["shoppingCartRecovery"]);
		}
		return $parameters;
	}

	private function handleShipping($order) {
		$cost = $order->getShipping()->getCost();
		$address = $this->handleAddress($order);

		$parameters = array(
			"cost" => $cost,
			"address" => $address
		);
		
		if(!$cost || $cost == 0) {
			unset($parameters["cost"]);
		}

		if(empty($address)) {
			unset($parameters["address"]);
		}
		return $parameters;
	}

	private function handleItems($order) {
		$items = array();
		foreach ($order->getItems() as $key => $item) {
			$items[$key] = array(
				"id" => $item->getId(),
				"amount" => $item->getAmount(),
				"quantity" => $item->getQuantity(),
				"discount" => $item->getDiscount(),
				"description" => $item->getDescription(),
				"freight" => $item->getFreight()
			);

			if(!$item->getDiscount() || $item->getDiscount() == 0) {
				unset($items[$key]["discount"]);
			}

			if(!$item->getFreight() || $item->getFreight() == 0) {
				unset($items[$key]["freight"]);
			}
		}
		return $items;
	}

	private function handleUrls($order) {
		$urls = array();
		foreach ($order->getUrls() as $key => $url) {
			$urls[$key] = array(
				"kind" => $url->getKind(),
				"url" => $url->getUrl()
			);
		}
		return $urls;
	}

	private function handleAddress($order) {
		$alias = $order->getShipping()->getAddress()->getAlias();
		$street = $order->getShipping()->getAddress()->getStreet();
		$number = $order->getShipping()->getAddress()->getNumber();
		$complement = $order->getShipping()->getAddress()->getComplement();
		$postalCode = $order->getShipping()->getAddress()->getPostalCode();
		$district = $order->getShipping()->getAddress()->getDistrict();
		$city = $order->getShipping()->getAddress()->getCity();
		$state = $order->getShipping()->getAddress()->getState();

		$parameters = array(
			"alias" => $alias,
			"street" => $street,
			"number" => $number,
			"complement" => $complement,
			"postalCode" => $postalCode,
			"district" => $district,
			"city" => $city,
			"state" => $state
		);

		if(!$alias) {
			unset($parameters["alias"]);
		}

		if(!$complement) {
			unset($parameters["complement"]);
		}
		return $parameters;
	}

	private function handleShoppingCartRecovery($order) {
		$enable = $order->getSettings()->getShoppingCartRecovery()->getEnable();
		$firstAlert = $order->getSettings()->getShoppingCartRecovery()->getFirstAlert();
		$secondAlert = $order->getSettings()->getShoppingCartRecovery()->getSecondAlert();
		$thirdAlert = $order->getSettings()->getShoppingCartRecovery()->getThirdAlert();
		$fourthAlert = $order->getSettings()->getShoppingCartRecovery()->getFourthAlert();
		$logoUrl = $order->getSettings()->getShoppingCartRecovery()->getLogoUrl();

		$parameters = array(
			"enable" => $enable,
			"firstAlert" => $firstAlert,
			"secondAlert" => $secondAlert,
			"thirdAlert" => $thirdAlert,
			"fourthAlert" => $fourthAlert,
			"logoUrl" => $logoUrl
		);

		if(!$enable) {
			unset($parameters["enable"]);
		}

		if(!$firstAlert) {
			unset($parameters["firstAlert"]);
		}

		if(!$secondAlert) {
			unset($parameters["secondAlert"]);
		}

		if(!$thirdAlert) {
			unset($parameters["thirdAlert"]);
		}

		if(!$fourthAlert) {
			unset($parameters["fourthAlert"]);
		}

		if(!$logoUrl) {
			unset($parameters["logoUrl"]);
		}
		return $parameters;
	}

	private function handlePhones($order) {
		$phones = array();
		foreach ($order->getCustomer()->getPhones() as $key => $phone) {
			$phones[$key] = array(
				"kind" => $phone->getKind(),
				"number" => $phone->getNumber()
			);
		}
		return $phones;
	}

	private function handleDocuments($order) {
		$documents = array();
		foreach ($order->getCustomer()->getDocuments() as $key => $document) {
			$documents[$key] = array(
				"kind" => $document->getKind(),
				"number" => $document->getNumber()
			);
		}
		return $documents;
	}
}
