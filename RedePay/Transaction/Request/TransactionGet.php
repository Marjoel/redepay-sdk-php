<?php

namespace RedePay\Transaction\Request;

use \RedePay\Utils\RequestInterface;

/**
 * Class TransactionGet
 *
 * @author Marjoel Moreira <marjoel@marjoel.com>
 * @license https://www.gnu.org/licenses/gpl-3.0.en.html
 */
class TransactionGet implements RequestInterface
{
    /**
     * The transaction ID
     *
     * @var string
     */
    private $transactionId;

    /**
     * TransactionGet constructor.
     *
     * @param string $transactionId
     */
    public function __construct($transactionId)
    {
        $this->transactionId = $transactionId;
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
        return sprintf("%s/transactions/%s", $this->getApiUrl(), $this->getTransactionId());
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
