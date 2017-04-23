<?php

namespace RedePay\Document;

/**
 * Class Document
 *
 * @author Marjoel Moreira <marjoel@marjoel.com>
 * @license https://www.gnu.org/licenses/gpl-3.0.en.html
 */
class Document
{
    /**
     * Traits
     */
    use \RedePay\Utils\Fillable;
    use \RedePay\Utils\Validation\CpfValidator;

    /**
     * Enum constants
     */
    const KIND_CPF = 'cpf';

    /**
     * The document type
     *
     * @var string
     */
    private $kind;

    /**
     * The document number
     *
     * @var string
     */
    private $number;

    /**
     * Document constructor.
     *
     * @param array|null $data The default data to be filled in the current Document object
     */
    public function __construct(array $data = null)
    {
        if (isset($data)) {
            $this->fill($data);
        }
    }

    /**
     * Sets the kind
     *
     * @param string $kind
     * @return Document
     */
    public function setKind($kind)
    {
        $this->kind = $kind;

        return $this;
    }

    /**
     * Gets the kind
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
     * @throws \InvalidArgumentException
     * @return Document
     */
    public function setNumber($number)
    {
        if ($this->cpfValidator($number)) {
            $this->number = $this->removeMask($number);
        } else {
            throw new \InvalidArgumentException($number ." is not a valid cpf value");
        }

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
