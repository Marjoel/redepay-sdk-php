<?php
/**
*  @author   Marjoel Moreira [marjoel@marjoel.com]
*  @license  https://www.gnu.org/licenses/gpl-3.0.en.html
*/

namespace RedePay\Tracking;

use \RedePay\Utils\Client;
use \RedePay\Utils\AbstractHandler;
use \RedePay\Tracking\Request\TrackingCreate;
use \RedePay\Tracking\Request\TrackingDelete;

class TrackingHandler extends AbstractHandler {
    use TrackingBuilder;

    public function create($tracking, $transactionId) {
        $request = new TrackingCreate($tracking, $transactionId);
        $response = $this->client->send($request);
        return $this->buildTracking($response);
    }

    public function delete($tracking, $transactionId) {
        $request = new TrackingDelete($tracking, $transactionId);
        $response = $this->client->send($request);
        return $this->buildTracking($response);
    }
}
