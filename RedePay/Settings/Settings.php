<?php

namespace RedePay\Settings;

use RedePay\ShoppingCartRecovery\ShoppingCartRecovery;
use RedePay\Utils\Fillable;

/**
 * Class Settings
 *
 * @author Marjoel Moreira <marjoel@marjoel.com>
 * @license https://www.gnu.org/licenses/gpl-3.0.en.html
 */
class Settings
{
    /**
     * Traits
     */
    use Fillable;

    /**
     * The expiration date
     *
     * @var string
     */
    private $expiresAt;

    /**
     * The number of maximum installments allowed
     *
     * @var int
     */
    private $maxInstallments;

    /**
     * The maximum number of payment attempts
     *
     * @var int
     */
    private $attempts;

    /**
     * The ShoppingCartRecovery object
     *
     * @var ShoppingCartRecovery
     */
    private $shoppingCartRecovery;

    /**
     * Settings constructor.
     *
     * @param array|null $data The default data to be filled in the current Settings object
     */
    public function __construct(array $data = null)
    {
        if (isset($data)) {
            $this->fill($data);
        }
    }

    /**
     * Sets the expiration date
     *
     * @param string $expiresAt
     * @return Settings
     */
    public function setExpiresAt($expiresAt)
    {
        $this->expiresAt = $expiresAt;

        return $this;
    }

    /**
     * Gets the expiration date
     *
     * @return string
     */
    public function getExpiresAt()
    {
        return $this->expiresAt;
    }

    /**
     * Sets the maximum installments number
     *
     * @param int $maxInstallments
     * @return Settings
     */
    public function setMaxInstallments($maxInstallments)
    {
        $this->maxInstallments = $maxInstallments;

        return $this;
    }

    /**
     * Gets the maximum installments number
     *
     * @return int
     */
    public function getMaxInstallments()
    {
        return $this->maxInstallments;
    }

    /**
     * Sets the maximum payment attempts
     *
     * @param int $attempts
     * @return Settings
     */
    public function setAttempts($attempts)
    {
        $this->attempts = $attempts;

        return $this;
    }

    /**
     * Gets the maximum payment attempts
     *
     * @return int
     */
    public function getAttempts()
    {
        return $this->attempts;
    }

    /**
     * Sets the ShoppingCartRecovery object
     *
     * @param ShoppingCartRecovery $shoppingCartRecovery
     * @return Settings
     */
    public function setShoppingCartRecovery(ShoppingCartRecovery $shoppingCartRecovery)
    {
        $this->shoppingCartRecovery = $shoppingCartRecovery;

        return $this;
    }

    /**
     * Gets the ShoppingCartRecovery object
     *
     * @return ShoppingCartRecovery
     */
    public function getShoppingCartRecovery()
    {
        return $this->shoppingCartRecovery;
    }
}
