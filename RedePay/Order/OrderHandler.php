<?php

namespace RedePay\Order;

use \RedePay\Utils\Client;
use \RedePay\Utils\AbstractHandler;
use \RedePay\Order\Request\OrderGet;
use \RedePay\Order\Request\OrderCreate;

/**
 * Class OrderHandler
 *
 * @author Marjoel Moreira <marjoel@marjoel.com>
 * @license https://www.gnu.org/licenses/gpl-3.0.en.html
 */
class OrderHandler extends AbstractHandler {
    use OrderBuilder;

    public function get($orderId) {
        $request = new OrderGet($orderId);
        $response = $this->client->send($request);
        return $this->buildOrder($response);
    }

    public function create($order) {
        $request = new OrderCreate($order);
        $response = $this->client->send($request);
        return $this->buildOrder($response);
    }
}
