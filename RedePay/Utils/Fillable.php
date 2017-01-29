<?php
/**
*  @author   Marjoel Moreira [marjoel@marjoel.com]
*  @license  https://www.gnu.org/licenses/gpl-3.0.en.html
*/

namespace RedePay\Utils;

trait Fillable {
    use \RedePay\Utils\CaseConverter;

    private function fill($data) {
        foreach($data as $key => $value) {
            $field = $this->toLowerCase($key);

            if(property_exists($this, $field)) {
                $this->$field = $value;
            }
        }
    }
}
