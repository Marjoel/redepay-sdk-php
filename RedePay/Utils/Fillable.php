<?php

namespace RedePay\Utils;

/**
 * Class Fillable
 *
 * @author Marjoel Moreira <marjoel@marjoel.com>
 * @license https://www.gnu.org/licenses/gpl-3.0.en.html
 */
trait Fillable
{
    /**
     * Traits
     */
    use CaseConverter;

    /**
     * Fill the current object with a data array
     *
     * @param array|\stdClass $data
     */
    private function fill($data)
    {
        foreach ($data as $key => $value) {
            $field = $this->toLowerCase($key);

            if (property_exists($this, $field)) {
                $this->$field = $value;
            }
        }
    }
}
