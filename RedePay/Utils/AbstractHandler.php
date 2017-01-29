<?php
/**
*  @author   Marjoel Moreira [marjoel@marjoel.com]
*  @license  https://www.gnu.org/licenses/gpl-3.0.en.html
*/

namespace RedePay\Utils;

abstract class AbstractHandler {
    /**
     * @param Client
     */
    protected $client;

    /**
     * @param Client
     */
    public function __construct($client) {
        $this->client = $client;
    }
}
