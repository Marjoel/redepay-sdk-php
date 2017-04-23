<?php

namespace RedePay\Tracking;

/**
 * Class Tracking
 *
 * @author Marjoel Moreira <marjoel@marjoel.com>
 * @license https://www.gnu.org/licenses/gpl-3.0.en.html
 */
class Tracking
{
    /**
     * Traits
     */
    use \RedePay\Utils\Fillable;

    /**
     * The tracking number
     *
     * @var string
     */
    private $trackingNumber;

    /**
     * The tracking change reason
     *
     * @var string
     */
    private $reason;

    /**
     * Tracking constructor.
     *
     * @param array|null $data The default data to be filled in the current Tracking object
     */
    public function __construct(array $data = null)
    {
        if (isset($data)) {
            $this->fill($data);
        }
    }

    /**
     * Sets the tracking number/code
     *
     * @param string $trackingNumber
     * @return Tracking
     */
    public function setCode($trackingNumber)
    {
        $this->trackingNumber = $trackingNumber;

        return $this;
    }

    /**
     * Gets the tracking number
     *
     * @return string
     */
    public function getCode()
    {
        return $this->trackingNumber;
    }

    /**
     * Sets the tracking number update reason
     *
     * @param string $reason
     * @return Tracking
     */
    public function setReason($reason)
    {
        $this->reason = $reason;

        return $this;
    }

    /**
     * Gets the tracking number update reason
     *
     * @return string
     */
    public function getReason()
    {
        return $this->reason;
    }
}
