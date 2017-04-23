<?php

namespace RedePay\Tracking\Request;

use RedePay\Tracking\Tracking;
use \RedePay\Utils\RequestInterface;

/**
 * Class TrackingDelete
 *
 * @author Marjoel Moreira <marjoel@marjoel.com>
 * @license https://www.gnu.org/licenses/gpl-3.0.en.html
 */
class TrackingDelete implements RequestInterface
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
     * TrackingDelete constructor.
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
        $reason = $this->tracking->getReason();
        
        $parameters = array(
            "reason" => $reason
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
        return self::HTTP_DELETE;
    }

    /**
     * {@inheritdoc}
     */
    public function getApiUrl()
    {
        return self::API_URL;
    }
}
