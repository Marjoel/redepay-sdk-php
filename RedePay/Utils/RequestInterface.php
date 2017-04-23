<?php

namespace RedePay\Utils;

/**
 * Interface RequestInterface
 *
 * @author Marjoel Moreira <marjoel@marjoel.com>
 * @license https://www.gnu.org/licenses/gpl-3.0.en.html
 */
interface RequestInterface
{
    /**
     * Available HTTP methods
     */
    const HTTP_GET = "GET";
    const HTTP_POST = "POST";
    const HTTP_PUT = "PUT";
    const HTTP_DELETE = "DELETE";

    /**
     * The API URI
     */
    const API_URL = "https://api.useredepay.com.br";

    /**
     * Gets the request payload
     *
     * @return string
     */
    public function getPayload();

    /**
     * Gets the resource endpoint
     *
     * @return string
     */
    public function getPath();

    /**
     * Gets the HTTP method
     *
     * @return string
     */
    public function getMethod();

    /**
     * Gets the API URI
     *
     * @return string
     */
    public function getApiUrl();
}
