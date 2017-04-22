<?php

namespace RedePay\Settings;

/**
 * Class Settings
 *
 * @author Marjoel Moreira <marjoel@marjoel.com>
 * @license https://www.gnu.org/licenses/gpl-3.0.en.html
 */
class Settings {
    use \RedePay\Utils\Fillable;

    /**
     * @param String
     */
    private $expiresAt;

    /**
     * @param String
     */
    private $maxInstallments;

    /**
     * @param String
     */
    private $attempts;

    /**
     * @param ShoppingCartRecovery
     */
    private $shoppingCartRecovery;

    /**
     * @param Settings
     */
    public function __construct($data = null) {
        if(isset($data)) {
            $this->fill($data);
        }
    }

    /**
     * @return String
     */
    public function getExpiresAt() {
        return $this->expiresAt;
    }

    /**
     * @return String
     */
    public function getMaxInstallments() {
        return $this->maxInstallments;
    }

    public function getAttempts() {
        return $this->attempts;
    }

    /**
     * @return String
     */
    public function getShoppingCartRecovery() {
        return $this->shoppingCartRecovery;
    }

    /**
     * @param String
     */
    public function setExpiresAt($expiresAt) {
        $this->expiresAt = $expiresAt;
    }

    /**
     * @param String
     */
    public function setMaxInstallments($maxInstallments) {
        $this->maxInstallments = $maxInstallments;
    }

    /**
     * @param String
     */
    public function setAttempts($attempts) {
        $this->attempts = $attempts;
    }

    /**
     * @param ShoppingCartRecovery
     */
    public function setShoppingCartRecovery($shoppingCartRecovery) {
        $this->shoppingCartRecovery = $shoppingCartRecovery;
    }
}
