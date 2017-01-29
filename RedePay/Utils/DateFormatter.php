<?php
/**
*  @author   Marjoel Moreira [marjoel@marjoel.com]
*  @license  https://www.gnu.org/licenses/gpl-3.0.en.html
*/

namespace RedePay\Utils;

trait DateFormatter {
    public function getDateInMicroseconds(\DateTime $date) {
        return substr($date->format('Uu'), 0, 13);
    }
}
