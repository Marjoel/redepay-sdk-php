<?php

namespace RedePay\Address;

/**
 * Class Address
 *
 * @author Marjoel Moreira <marjoel@marjoel.com>
 * @license https://www.gnu.org/licenses/gpl-3.0.en.html
 */
class Address
{
    /**
     * Traits
     */
    use \RedePay\Utils\Fillable;
    use \RedePay\Utils\RemoveMask;

    /**
     * The alias
     *
     * @var string
     */
    private $alias;

    /**
     * The street
     *
     * @var string
     */
    private $street;

    /**
     * The number
     *
     * @var string
     */
    private $number;

    /**
     * The complement
     *
     * @var string
     */
    private $complement;

    /**
     * The postal code
     *
     * @var string
     */
    private $postalCode;

    /**
     * The district/neighborhood
     *
     * @var string
     */
    private $district;

    /**
     * The city
     *
     * @var string
     */
    private $city;

    /**
     * The state/province
     *
     * @var string
     */
    private $state;

    /**
     * Address constructor.
     *
     * @param array|null $data The default data to be filled in the current Address object
     */
    public function __construct(array $data = null)
    {
        if (isset($data)) {
            $this->fill($data);
        }
    }

    /**
     * Sets the alias
     *
     * @param string $alias
     * @return Address
     */
    public function setAlias($alias)
    {
        $this->alias = $alias;

        return $this;
    }

    /**
     * Gets the alias
     *
     * @return string
     */
    public function getAlias()
    {
        return $this->alias;
    }

    /**
     * Sets the street name
     *
     * @param string $street
     * @return Address
     */
    public function setStreet($street)
    {
        $this->street = $street;

        return $this;
    }

    /**
     * Gets the street name
     *
     * @return string
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * Sets the number
     *
     * @param string $number
     * @return Address
     */
    public function setNumber($number)
    {
        $this->number = $number;

        return $this;
    }

    /**
     * Gets the number
     *
     * @return string
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Sets the complement
     *
     * @param string $complement
     * @return Address
     */
    public function setComplement($complement)
    {
        $this->complement = $complement;

        return $this;
    }

    /**
     * Gets the complement
     *
     * @return string
     */
    public function getComplement()
    {
        return $this->complement;
    }

    /**
     * Sets the postal code
     *
     * @param string $postalCode
     * @return Address
     */
    public function setPostalCode($postalCode)
    {
        $this->postalCode = $this->removeMask($postalCode);

        return $this;
    }

    /**
     * Gets the postal code
     *
     * @return string
     */
    public function getPostalCode()
    {
        return $this->postalCode;
    }

    /**
     * Sets the district
     *
     * @param string $district
     * @return Address
     */
    public function setDistrict($district)
    {
        $this->district = $district;

        return $this;
    }

    /**
     * Gets the district
     *
     * @return string
     */
    public function getDistrict()
    {
        return $this->district;
    }

    /**
     * Sets the city
     *
     * @param string $city
     * @return Address
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Gets the city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Sets the state
     *
     * @param string $state
     * @return Address
     */
    public function setState($state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * Gets the state
     *
     * @return string
     */
    public function getState()
    {
        return $this->state;
    }
}
