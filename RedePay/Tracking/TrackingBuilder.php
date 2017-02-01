<?php
/**
*  @author   Marjoel Moreira [marjoel@marjoel.com]
*  @license  https://www.gnu.org/licenses/gpl-3.0.en.html
*/

namespace RedePay\Tracking;

use \RedePay\Tracking\Tracking;

trait TrackingBuilder {
    private function buildTracking($data) {
        return new Tracking(get_object_vars($data));
    }
}
