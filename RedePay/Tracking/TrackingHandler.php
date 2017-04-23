<?php

namespace RedePay\Tracking;

use RedePay\Utils\AbstractHandler;
use RedePay\Tracking\Request\TrackingCreate;
use RedePay\Tracking\Request\TrackingDelete;

/**
 * Class TrackingHandler
 *
 * @author Marjoel Moreira <marjoel@marjoel.com>
 * @license https://www.gnu.org/licenses/gpl-3.0.en.html
 */
class TrackingHandler extends AbstractHandler
{
    /**
     * Traits
     */
    use TrackingBuilder;

    /**
     * Creates a new tracking resource
     *
     * @param Tracking $tracking
     * @param string $transactionId
     * @return Tracking
     */
    public function create(Tracking $tracking, $transactionId)
    {
        $request = new TrackingCreate($tracking, $transactionId);
        $response = $this->client->send($request);
        return $this->buildTracking($response);
    }

    /**
     * Delete an existing tracking resource
     *
     * @param Tracking $tracking
     * @param string $transactionId
     * @return Tracking
     */
    public function delete(Tracking $tracking, $transactionId)
    {
        $request = new TrackingDelete($tracking, $transactionId);
        $response = $this->client->send($request);
        return $this->buildTracking($response);
    }
}
