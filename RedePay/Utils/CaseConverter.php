<?php

namespace RedePay\Utils;

/**
 * Class CaseConverter
 *
 * @author Marjoel Moreira <marjoel@marjoel.com>
 * @license https://www.gnu.org/licenses/gpl-3.0.en.html
 */
trait CaseConverter
{
    /**
     * Converts a string to uppercase
     *
     * @param string $sentence
     * @return string
     */
    public function toUpperCase($sentence)
    {
        return preg_replace_callback("/(?:^|_)([a-zA-Z])/", function ($word) {
            return strtoupper($word[1]);
        }, $sentence);
    }

    /**
     * Converts a string to lowercase
     *
     * @param string $sentence
     * @return string
     */
    public function toLowerCase($sentence)
    {
        return lcfirst($this->toUpperCase($sentence));
    }
}
