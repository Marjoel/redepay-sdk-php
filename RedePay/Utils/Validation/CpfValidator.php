<?php
/**
*  @author   Marjoel Moreira [marjoel@marjoel.com]
*  @license  https://www.gnu.org/licenses/gpl-3.0.en.html
*/

namespace RedePay\Utils\Validation;

trait CpfValidator {
    public function cpfValidator($cpf) {
        $regEx = "/^(0{11}|1{11}|2{11}|3{11}|4{11}|5{11}|6{11}|7{11}|8{11}|9{11})$/";
        $sum = 0;
        $init = 0;
        $i = 0;

        if (((!$cpf) || (strlen($cpf) != 11) || (preg_match($regEx, $cpf)))) {
            return false;
        }
        return $this->digitValidator($cpf, 9) && $this->digitValidator($cpf, 10);
    }

    private function digitValidator($cpf, $digit) {
        $sum = 0;
        $init = $digit - 9;

        for ($i = 0; $i < 9; $i++) {
            $sum += ($cpf{$i + $init}) * ($i + 1);
        }
        return ((($sum % 11) % 10) == $cpf{$digit});
    }
}
