<?php
/**
*  @author   Daniel Pavone [danielpavone@gmail.com]
*  @license  https://www.gnu.org/licenses/gpl-3.0.en.html
*/

namespace RedePay\Utils;

trait RemoveMask {
    private function removeMask($string) {
        return preg_replace("/[^0-9]/", "", $string);
    }
}