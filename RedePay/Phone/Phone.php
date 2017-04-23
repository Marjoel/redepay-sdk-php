<?php

namespace RedePay\Phone;

/**
 * Class Phone
 *
 * @author Marjoel Moreira <marjoel@marjoel.com>
 * @license https://www.gnu.org/licenses/gpl-3.0.en.html
 */
class Phone
{
    /**
     * Traits
     */
    use \RedePay\Utils\Fillable;
    use \RedePay\Utils\RemoveMask;

    /**
     * Enum constants
     */
    const KIND_COMMERCIAL = 'business';
    const KIND_HOME       = 'home';
    const KIND_MOBILE     = 'cellphone';

    /**
     * The phone type
     *
     * @var string
     */
    private $kind;

    /**
     * The phone number
     *
     * @var string
     */
    private $number;

    /**
     * Phone constructor.
     *
     * @param array|null $data The default data to be filled in the current Phone object
     */
    public function __construct(array $data = null)
    {
        if (isset($data)) {
            $this->fill($data);
        }
    }

    /**
     * Sets the type
     *
     * @param string $kind
     * @return Phone
     */
    public function setKind($kind)
    {
        $this->kind = $kind;

        return $this;
    }

    /**
     * Gets the type
     *
     * @return string
     */
    public function getKind()
    {
        return $this->kind;
    }

    /**
     * Sets the number
     *
     * @param string $number
     * @return Phone
     */
    public function setNumber($number)
    {
        $this->number = $this->removeMask($number);

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
}
