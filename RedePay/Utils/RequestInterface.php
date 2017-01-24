<?php
namespace RedePay\Utils;

interface RequestInterface {
    const HTTP_GET = "GET";
    const HTTP_POST = "POST";
    const HTTP_PUT = "PUT";
    const HTTP_DELETE = "DELETE";
	const API_URL = "https://api.useredepay.com.br";
	const API_KEY = "8e8647ec-5f39-492b-8515-5756f2587521";
	
    public function getPayload();

    public function getPath();

    public function getMethod();

    public function getApiUrl();

    public function getApiKey();
}
