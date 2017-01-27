<?php
namespace RedePay\Utils;

interface RequestInterface {
	const HTTP_GET = "GET";
	const HTTP_POST = "POST";
	const HTTP_PUT = "PUT";
	const HTTP_DELETE = "DELETE";
	const API_URL = "https://api.useredepay.com.br";

	public function getPayload();

	public function getPath();

	public function getMethod();

	public function getApiUrl();
}
