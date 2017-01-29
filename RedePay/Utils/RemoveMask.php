<?php
/**
*  @author   Daniel Pavone [danielpavone@gmail.com]
*  @license  https://www.gnu.org/licenses/gpl-3.0.en.html
*/

namespace RedePay\Utils;

trait RemoveMask {
    
    /**
     * @param String
     */
    private function removeMask($value) {
        return preg_replace("/[^0-9]/", "", $value);
    }
}