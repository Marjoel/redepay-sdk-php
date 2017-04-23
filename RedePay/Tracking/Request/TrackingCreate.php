<?php

namespace RedePay\Tracking\Request;

use RedePay\Tracking\Tracking;
use RedePay\Utils\RequestInterface;

/**
 * Class TrackingCreate
 *
 * @author Marjoel Moreira <marjoel@marjoel.com>
 * @license https://www.gnu.org/licenses/gpl-3.0.en.html
 */
class TrackingCreate implements RequestInterface
{
    /**
     * The Tracking object
     *
     * @var Tracking
     */
    private $tracking;

    /**
     * The transaction ID
     *
     * @var string
     */
    private $transactionId;

    /**
     * TrackingCreate constructor.
     *
     * @param Tracking $tracking
     * @param string $transactionId
     */
    public function __construct(Tracking $tracking, $transactionId)
    {
        $this->tracking = $tracking;
        $this->transactionId = $transactionId;
    }

    /**
     * {@inheritdoc}
     */
    public function getPayload()
    {
        $trackingNumber = $this->tracking->getCode();
        
        $parameters = array(
            "trackingNumber" => $trackingNumber
        );
        return json_encode($parameters, JSON_UNESCAPED_UNICODE);
    }

    /**
     * Gets the transaction ID
     *
     * @return string
     */
    public function getTransactionId()
    {
        return $this->transactionId;
    }

    /**
     * {@inheritdoc}
     */
    public function getPath()
    {
        return sprintf("%s/transactions/%s/trackings", $this->getApiUrl(), $this->getTransactionId());
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
        return self::HTTP_POST;
    }

    /**
     * {@inheritdoc}
     */
    public function getApiUrl()
    {
        return self::API_URL;
    }
}
