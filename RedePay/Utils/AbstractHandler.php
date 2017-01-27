<?php
namespace RedePay\Utils;

abstract class AbstractHandler {
	/**
	 * @param Client
	 */
	protected $client;

	/**
	 * @param Client
	 */
	public function __construct($client) {
		$this->client = $client;
	}
}
