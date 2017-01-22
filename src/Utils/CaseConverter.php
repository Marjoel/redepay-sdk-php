<?php

trait CaseConverter {
    public function snakeToUpperCamel($sentence) {
        return preg_replace_callback("/(?:^|_)([a-zA-Z])/", function ($word) {
            return strtoupper($word[1]);
        }, $sentence);
    }

    public function snakeToLowerCamel($sentence) {
        return lcfirst($this->snakeToUpperCamel($sentence));
    }
}
