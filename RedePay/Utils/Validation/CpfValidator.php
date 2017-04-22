<?php

namespace RedePay\Utils\Validation;

/**
 * Class CpfValidator
 *
 * @author Marjoel Moreira <marjoel@marjoel.com>
 * @license https://www.gnu.org/licenses/gpl-3.0.en.html
 */
trait CpfValidator {
    use \RedePay\Utils\RemoveMask;

    public function cpfValidator($value) {
        $value = $this->removeMask($value);
        $regEx = "/^(0{11}|1{11}|2{11}|3{11}|4{11}|5{11}|6{11}|7{11}|8{11}|9{11})$/";

        if (((!$value) || (strlen($value) != 11) || (preg_match($regEx, $value)))) {
            return false;
        }
        return ($this->digitValidator($value, 9) && $this->digitValidator($value, 10));
    }

    private function digitValidator($value, $digit) {
        $init = $digit - 9;
        $sum = 0;

        for ($i = 0; $i < 9; $i++) {
            $sum += ($value{$i + $init}) * ($i + 1);
        }
        return ((($sum % 11) % 10) == $value{$digit});
    }
}
