<?php

namespace RedePay\Utils;

/**
 * Class RemoveMask
 *
 * @author Marjoel Moreira <marjoel@marjoel.com>
 * @license https://www.gnu.org/licenses/gpl-3.0.en.html
 */
trait RemoveMask
{
    /**
     * Removes masks and format characters
     *
     * @param string $value
     * @return string
     */
    private function removeMask($value)
    {
        return preg_replace("/[^0-9]/", "", $value);
    }
}
