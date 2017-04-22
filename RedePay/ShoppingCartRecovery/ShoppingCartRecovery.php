<?php

namespace RedePay\ShoppingCartRecovery;

/**
 * Class ShoppingCartRecovery
 *
 * @author Marjoel Moreira <marjoel@marjoel.com>
 * @license https://www.gnu.org/licenses/gpl-3.0.en.html
 */
class ShoppingCartRecovery {
    use \RedePay\Utils\Fillable;

    /**
     * @param String
     */
    private $enable;

    /**
     * @param String
     */
    private $firstAlert;

    /**
     * @param String
     */
    private $secondAlert;

    /**
     * @param String
     */
    private $thirdAlert;

    /**
     * @param String
     */
    private $fourthAlert;

    /**
     * @param String
     */
    private $logoUrl;

    /**
     * @param ShoppingCartRecovery
     */
    public function __construct($data = null) {
        if(isset($data)) {
            $this->fill($data);
        }
    }

    /**
     * @return String
     */
    public function getEnable() {
        return $this->enable;
    }

    /**
     * @return String
     */
    public function getFirstAlert() {
        return $this->firstAlert;
    }

    /**
     * @return String
     */
    public function getSecondAlert() {
        return $this->secondAlert;
    }

    /**
     * @return String
     */
    public function getThirdAlert() {
        return $this->thirdAlert;
    }

    /**
     * @return String
     */
    public function getFourthAlert() {
        return $this->fourthAlert;
    }

    /**
     * @return String
     */
    public function getLogoUrl() {
        return $this->logoUrl;
    }

    /**
     * @param String
     */
    public function setEnable($enable) {
        $this->enable = $enable;
    }

    /**
     * @param String
     */
    public function setFirstAlert($firstAlert) {
        $this->firstAlert = $firstAlert;
    }

    /**
     * @param String
     */
    public function setSecondAlert($secondAlert) {
        $this->secondAlert = $secondAlert;
    }

    /**
     * @param String
     */
    public function setThirdAlert($thirdAlert) {
        $this->thirdAlert = $thirdAlert;
    }

    /**
     * @param String
     */
    public function setFourthAlert($fourthAlert) {
        $this->fourthAlert = $fourthAlert;
    }

    /**
     * @param String
     */
    public function setLogoUrl($logoUrl) {
        $this->logoUrl = $logoUrl;
    }
}
