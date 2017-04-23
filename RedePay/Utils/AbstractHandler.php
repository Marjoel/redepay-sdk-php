<?php

namespace RedePay\Utils;

/**
 * Class AbstractHandler
 *
 * @author Marjoel Moreira <marjoel@marjoel.com>
 * @license https://www.gnu.org/licenses/gpl-3.0.en.html
 */
abstract class AbstractHandler
{
    /**
     * The HTTP Client
     *
     * @var Client
     */
    protected $client;

    /**
     * AbstractHandler constructor.
     *
     * @param Client $client
     */
    public function __construct($client)
    {
        $this->client = $client;
    }
}
