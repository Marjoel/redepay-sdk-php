<?php
/**
*  @author   Marjoel Moreira [marjoel@marjoel.com]
*  @license  https://www.gnu.org/licenses/gpl-3.0.en.html
*/

namespace RedePay\Customer;

class Customer {
    use \RedePay\Utils\Fillable;

    /**
     * @param String
     */
    private $name;

    /**
     * @param String
     */
    private $email;

    /**
     * @param Document[]
     */
    private $documents;

    /**
     * @param Phone[]
     */
    private $phones;

    /**
     * @param Customer
     */
    public function __construct($data = null) {
        if(isset($data)) {
            $this->fill($data);
        }
    }

    /**
     * @param String
     */
    public function getName() {
        return $this->name;
    }

    /**
     * @param String
     */
    public function getEmail() {
        return $this->email;
    }

    /**
     * @return Document[]
     */
    public function getDocuments() {
        return $this->documents;
    }

    /**
     * @return Phone[]
     */
    public function getPhones() {
        return $this->phones;
    }

    /**
     * @return String
     */
    public function setName($name) {
        $this->name = $name;
    }

    /**
     * @return String
     */
    public function setEmail($email) {
        $this->email = $email;
    }

    /**
     * @param Document[]
     */
    public function setDocuments($documents) {
        $this->documents = $documents;
    }

    /**
     * @param Phone[]
     */
    public function setPhones($phones) {
        $this->phones = $phones;
    }
}
