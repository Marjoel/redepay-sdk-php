<?php

namespace RedePay\Tracking;

use \RedePay\Tracking\Tracking;

/**
 * Class TrackingBuilder
 *
 * @author Marjoel Moreira <marjoel@marjoel.com>
 * @license https://www.gnu.org/licenses/gpl-3.0.en.html
 */
trait TrackingBuilder
{
    /**
     * Factory a Tracking object
     *
     * @param \stdClass $data
     * @return \RedePay\Tracking\Tracking
     */
    private function buildTracking($data)
    {
        return new Tracking(get_object_vars($data));
    }
}
