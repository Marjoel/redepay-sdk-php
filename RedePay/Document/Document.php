<?php

namespace RedePay\Document;

/**
 * Class Document
 *
 * @author Marjoel Moreira <marjoel@marjoel.com>
 * @license https://www.gnu.org/licenses/gpl-3.0.en.html
 */
class Document {
    use \RedePay\Utils\Fillable;
    use \RedePay\Utils\Validation\CpfValidator;

    /**
     * @param String
     */
    private $kind;

    /**
     * @param String
     */
    private $number;

    /**
     * @param Document
     */
    public function __construct($data = null) {
        if(isset($data)) {
            $this->fill($data);
        }
    }

    /**
     * @return String
     */
    public function getKind() {
        return $this->kind;
    }

    /**
     * @return String
     */
    public function getNumber() {
        return $this->number;
    }

    /**
     * @param String
     */
    public function setKind($kind) {
        $this->kind = $kind;
    }

    /**
     * @param String
     */
    public function setNumber($number) {
        if($this->cpfValidator($number)) {
            $this->number = $this->removeMask($number);
        }
        else {
            throw new \InvalidArgumentException($number ." is not a valid cpf value");
        }
    }
}
