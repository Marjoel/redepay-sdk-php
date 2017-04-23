<?php

namespace RedePay\Order\Request;

use RedePay\Utils\RequestInterface;

/**
 * Class OrderGet
 *
 * @author Marjoel Moreira <marjoel@marjoel.com>
 * @license https://www.gnu.org/licenses/gpl-3.0.en.html
 */
class OrderGet implements RequestInterface
{
    /**
     * The order ID
     *
     * @var string
     */
    private $orderId;

    /**
     * OrderGet constructor.
     *
     * @param string $orderId The order ID
     */
    public function __construct($orderId)
    {
        $this->orderId = $orderId;
    }

    /**
     * {@inheritdoc}
     */
    public function getPayload()
    {
        return [];
    }

    /**
     * {@inheritdoc}
     */
    public function getPath()
    {
        return sprintf("%s/orders/%s", $this->getApiUrl(), $this->getOrderId());
    }

    /**
     * Gets the order ID
     *
     * @return string
     */
    public function getOrderId()
    {
        return $this->orderId;
    }

    /**
     * Gets the data
     *
     * @return null
     */
    public function getData()
    {
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function getMethod()
    {
        return self::HTTP_GET;
    }

    /**
     * {@inheritdoc}
     */
    public function getApiUrl()
    {
        return self::API_URL;
    }
}
