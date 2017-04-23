<?php

namespace RedePay;

use RedePay\Order\OrderHandler;
use RedePay\Tracking\TrackingHandler;
use RedePay\Transaction\TransactionHandler;
use RedePay\Utils\Client;

/**
 * Class RedePay
 *
 * @author Marjoel Moreira <marjoel@marjoel.com>
 * @license https://www.gnu.org/licenses/gpl-3.0.en.html
 */
class RedePay
{
    /**
     * The API Client
     *
     * @var Client
     */
    private $client;

    /**
     * The transaction handler
     *
     * @var TransactionHandler
     */
    private $transactionHandler;

    /**
     * The order handler
     *
     * @var OrderHandler
     */
    private $orderHandler;

    /**
     * The tracking handler
     *
     * @var TrackingHandler
     */
    private $trackingHandler;

    /**
     * RedePay constructor.
     *
     * @param string $apiKey
     */
    public function __construct($apiKey)
    {
        $this->client = new Client($apiKey);
    }

    /**
     * Gets the transaction handler
     *
     * @return TransactionHandler
     */
    public function transaction()
    {
        if (!$this->transactionHandler instanceof TransactionHandler) {
            $this->transactionHandler = new TransactionHandler($this->client);
        }
        return $this->transactionHandler;
    }

    /**
     * Gets the order handler
     *
     * @return OrderHandler
     */
    public function order()
    {
        if (!$this->orderHandler instanceof OrderHandler) {
            $this->orderHandler = new OrderHandler($this->client);
        }
        return $this->orderHandler;
    }

    /**
     * Gets the tracking handler
     *
     * @return TrackingHandler
     */
    public function tracking()
    {
        if (!$this->trackingHandler instanceof TrackingHandler) {
            $this->trackingHandler = new TrackingHandler($this->client);
        }
        return $this->trackingHandler;
    }
}
