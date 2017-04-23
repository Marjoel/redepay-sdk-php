<?php

namespace RedePay\ShoppingCartRecovery;

use RedePay\Utils\Fillable;

/**
 * Class ShoppingCartRecovery
 *
 * @author Marjoel Moreira <marjoel@marjoel.com>
 * @license https://www.gnu.org/licenses/gpl-3.0.en.html
 */
class ShoppingCartRecovery
{
    /**
     * Traits
     */
    use Fillable;

    /**
     * Sets the recovery to enabled
     *
     * @var bool
     */
    private $enable;

    /**
     * Sets the first alarm in hours
     *
     * @var int
     */
    private $firstAlert;

    /**
     * Sets the second alarm in hours
     *
     * @var int
     */
    private $secondAlert;

    /**
     * Sets the third alarm in hours
     *
     * @var int
     */
    private $thirdAlert;

    /**
     * Sets the fourth alarm in hours
     *
     * @var int
     */
    private $fourthAlert;

    /**
     * The merchant logo url
     *
     * @var string
     */
    private $logoUrl;

    /**
     * ShoppingCartRecovery constructor.
     *
     * @param array|null $data The default data to be filled in the current ShoppingCartRecovery object
     */
    public function __construct(array $data = null)
    {
        if (isset($data)) {
            $this->fill($data);
        }
    }

    /**
     * Sets the object enabled
     *
     * @param bool $enable
     * @return ShoppingCartRecovery
     */
    public function setEnable($enable)
    {
        $this->enable = $enable;

        return $this;
    }

    /**
     * Gets the enabled status
     *
     * @return bool
     */
    public function getEnable()
    {
        return $this->enable;
    }

    /**
     * Sets the first alert
     *
     * @param int $firstAlert
     * @return ShoppingCartRecovery
     */
    public function setFirstAlert($firstAlert)
    {
        $this->firstAlert = $firstAlert;

        return $this;
    }

    /**
     * Gets the first alert
     *
     * @return int
     */
    public function getFirstAlert()
    {
        return $this->firstAlert;
    }

    /**
     * Sets the second alert
     *
     * @param int $secondAlert
     * @return ShoppingCartRecovery
     */
    public function setSecondAlert($secondAlert)
    {
        $this->secondAlert = $secondAlert;

        return $this;
    }

    /**
     * Gets the second alert
     *
     * @return int
     */
    public function getSecondAlert()
    {
        return $this->secondAlert;
    }

    /**
     * Sets the third alert
     *
     * @param int $thirdAlert
     * @return ShoppingCartRecovery
     */
    public function setThirdAlert($thirdAlert)
    {
        $this->thirdAlert = $thirdAlert;

        return $this;
    }

    /**
     * Gets the third alert
     *
     * @return int
     */
    public function getThirdAlert()
    {
        return $this->thirdAlert;
    }

    /**
     * Sets the fourth alert
     *
     * @param int $fourthAlert
     * @return ShoppingCartRecovery
     */
    public function setFourthAlert($fourthAlert)
    {
        $this->fourthAlert = $fourthAlert;

        return $this;
    }

    /**
     * Gets the fourth alert
     *
     * @return int
     */
    public function getFourthAlert()
    {
        return $this->fourthAlert;
    }

    /**
     * Sets the logo url
     *
     * @param string $logoUrl
     * @return ShoppingCartRecovery
     */
    public function setLogoUrl($logoUrl)
    {
        $this->logoUrl = $logoUrl;

        return $this;
    }

    /**
     * Gets the logo url
     *
     * @return string
     */
    public function getLogoUrl()
    {
        return $this->logoUrl;
    }
}
