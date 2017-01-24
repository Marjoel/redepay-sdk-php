<?php
namespace RedePay\Utils;

trait CaseConverter {
    public function toUpperCase($sentence) {
        return preg_replace_callback("/(?:^|_)([a-zA-Z])/", function ($word) {
            return strtoupper($word[1]);
        }, $sentence);
    }

    public function toLowerCase($sentence) {
        return lcfirst($this->toUpperCase($sentence));
    }
}
