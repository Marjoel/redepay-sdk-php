<?php
/**
*  @author   Marjoel Moreira [marjoel@marjoel.com]
*  @license  https://www.gnu.org/licenses/gpl-3.0.en.html
*/

namespace RedePay\Tracking;

class Tracking {
    use \RedePay\Utils\Fillable;

    /**
     * @param String
     */
    private $trackingNumber;

    /**
     * @param String
     */
    private $reason;

    /**
     * @param Tracking
     */
    public function __construct($data = null) {
        if(isset($data)) {
            $this->fill($data);
        }
    }

    /**
     * @return String
     */
    public function getCode() {
        return $this->trackingNumber;
    }

    /**
     * @return String
     */
    public function getReason() {
        return $this->reason;
    }

    /**
     * @param String
     */
    public function setCode($trackingNumber) {
        $this->trackingNumber = $trackingNumber;
    }

    /**
     * @param String
     */
    public function setReason($reason) {
        $this->reason = $reason;
    }
}
