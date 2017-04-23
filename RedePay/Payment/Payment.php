<?php

namespace RedePay\Payment;

use RedePay\Utils\Fillable;

/**
 * Class Payment
 *
 * @author Marjoel Moreira <marjoel@marjoel.com>
 * @license https://www.gnu.org/licenses/gpl-3.0.en.html
 */
class Payment
{
    /**
     * Traits
     */
    use Fillable;

    /**
     * The method
     *
     * @var string
     */
    private $method;

    /**
     * The card brand
     *
     * @var string
     */
    private $cardBrand;

    /**
     * The installments number
     *
     * @var int
     */
    private $installments;

    /**
     * Payment constructor.
     *
     * @param array|null $data The default data to be filled in the current Payment object
     */
    public function __construct(array $data = null)
    {
        if (isset($data)) {
            $this->fill($data);
        }
    }

    /**
     * Gets the method
     *
     * @return string
     */
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * Gets the card brand
     *
     * @return string
     */
    public function getCardBrand()
    {
        return $this->cardBrand;
    }

    /**
     * Gets the installments number
     * w
     * @return int
     */
    public function getInstallments()
    {
        return $this->installments;
    }
}
