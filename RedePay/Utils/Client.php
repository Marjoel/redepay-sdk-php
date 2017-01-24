<?php
namespace RedePay\Utils;

trait Client {
    public function __construct() {
    }

    public function send(RequestInterface $request) {
		$response = $this->execute($request->getApiKey(), $request->getPath(), $request->getMethod(), $request->getData());
		return json_decode($response);
    }
	
	private function execute($apiKey, $url, $method, $data) {
		$headers = array(
			"access-token: " . $apiKey,
			"Accept: application/json",
			"Content-Type: application/json"
		);

		$curl = curl_init();
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
		curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
		curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);

		if($method == "POST") {
			curl_setopt($curl, CURLOPT_POST, true);
			curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
		}
		elseif($method == "DELETE") {
			curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "DELETE");
			curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
		}

		curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_USERAGENT, "Rede-Pay/1.0 (+https://github.com/marjoel/redepay-opencart)");
        curl_setopt($curl, CURLOPT_VERBOSE, 0);
        curl_setopt($curl, CURLOPT_HEADER, 1);

        $response = curl_exec($curl);
        $http_header_size = curl_getinfo($curl, CURLINFO_HEADER_SIZE);
        $http_body = substr($response, $http_header_size);

		$data = $http_body;
		
		if (json_last_error() > 0) { 
			$data = $http_body;
		}
		return $data;
	}
}
