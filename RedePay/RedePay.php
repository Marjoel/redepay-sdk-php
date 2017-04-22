<?php

namespace RedePay;

use \RedePay\Utils\Client;
use \RedePay\Transaction\TransactionHandler;
use \RedePay\Order\OrderHandler;
use \RedePay\Tracking\TrackingHandler;

/**
 * Class RedePay
 *
 * @author Marjoel Moreira <marjoel@marjoel.com>
 * @license https://www.gnu.org/licenses/gpl-3.0.en.html
 */
class RedePay {
    /**
     * @param Client
     */
    private $client;

    /**
     * @param TransactionHandler
     */
    private $transactionHandler;

    /**
     * @param OrderHandler
     */
    private $orderHandler;

    /**
     * @param TrackingHandler
     */
    private $trackingHandler;

    /**
     * @param String
     */
    public function __construct($apiKey) {
        $this->client = new Client($apiKey);
    }

    /**
     * @return TransactionHandler
     */
    public function transaction() {
        if (!$this->transactionHandler instanceof TransactionHandler) {
            $this->transactionHandler = new TransactionHandler($this->client);
        }
        return $this->transactionHandler;
    }

    /**
     * @return OrderHandler
     */
    public function order() {
        if (!$this->orderHandler instanceof OrderHandler) {
            $this->orderHandler = new OrderHandler($this->client);
        }
        return $this->orderHandler;
    }

    /**
     * @return TrackingHandler
     */
    public function tracking() {
        if (!$this->trackingHandler instanceof TrackingHandler) {
            $this->trackingHandler = new TrackingHandler($this->client);
        }
        return $this->trackingHandler;
    }
}
