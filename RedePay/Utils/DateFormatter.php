<?php

namespace RedePay\Utils;

/**
 * Class DateFormatter
 *
 * @author Marjoel Moreira <marjoel@marjoel.com>
 * @license https://www.gnu.org/licenses/gpl-3.0.en.html
 */
trait DateFormatter
{
    /**
     * Gets a date in microseconds format
     *
     * @param \DateTime $date
     * @return string
     */
    public function getDateInMicroseconds(\DateTime $date)
    {
        return substr($date->format('Uu'), 0, 13);
    }
}
