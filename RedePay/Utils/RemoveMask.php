<?php

namespace RedePay\Utils;

/**
 * Class RemoveMask
 *
 * @author Marjoel Moreira <marjoel@marjoel.com>
 * @license https://www.gnu.org/licenses/gpl-3.0.en.html
 */
trait RemoveMask {
    
    /**
     * @param String
     */
    private function removeMask($value) {
        return preg_replace("/[^0-9]/", "", $value);
    }
}