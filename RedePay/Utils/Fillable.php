<?php
namespace RedePay\Utils;

trait Fillable {
	use \RedePay\Utils\CaseConverter;

    private function fill($data) {
        foreach ($data as $key => $value) {
            $field = $this->toLowerCase($key);

            if (property_exists($this, $field)) {
                $this->$field = $value;
            }
        }
    }
}
