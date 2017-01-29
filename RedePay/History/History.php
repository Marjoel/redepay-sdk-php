<?php
/**
*  @author   Marjoel Moreira [marjoel@marjoel.com]
*  @license  https://www.gnu.org/licenses/gpl-3.0.en.html
*/

namespace RedePay\History;

class History {
    use \RedePay\Utils\Fillable;

    /**
     * @param String
     */
    private $date;

    /**
     * @param String
     */
    private $status;

    /**
     * @param String
     */
    private $id;

    /**
     * @param String
     */
    private $value;

    /**
     * @param History
     */
    public function __construct($data = null) {
        if(isset($data)) {
            $this->fill($data);
        }
    }

    /**
     * @return String
     */
    public function getDate() {
        return $this->date;
    }

    /**
     * @return String
     */
    public function getStatus() {
        return $this->status;
    }

    /**
     * @return String
     */
    public function getId() {
        return $this->id;
    }

    /**
     * @return String
     */
    public function getValue() {
        return $this->value;
    }
}
