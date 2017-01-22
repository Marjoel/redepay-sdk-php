<?php
require_once "RedePay/Utils/CaseConverter.php";

trait Fillable {
	use CaseConverter;

    private function fill($data) {
        foreach ($data as $key => $value) {
            $field = $this->snakeToLowerCamel($key);

            if (property_exists($this, $field)) {
                $this->$field = $value;
            }
        }
    }
}
