<?php

namespace RedePay\Customer;

use RedePay\Document\Document;
use RedePay\Phone\Phone;

/**
 * Class Customer
 *
 * @author Marjoel Moreira <marjoel@marjoel.com>
 * @license https://www.gnu.org/licenses/gpl-3.0.en.html
 */
class Customer
{
    /**
     * Traits
     */
    use \RedePay\Utils\Fillable;

    /**
     * The customer name
     *
     * @var string
     */
    private $name;

    /**
     * The customer email address
     *
     * @var string
     */
    private $email;

    /**
     * The customer documents
     *
     * @var Document[]
     */
    private $documents;

    /**
     * The customer phone numbers
     *
     * @var Phone[]
     */
    private $phones;

    /**
     * Customer constructor.
     *
     * @param array|null $data The default data to be filled in the current Customer object
     */
    public function __construct(array $data = null)
    {
        if (isset($data)) {
            $this->fill($data);
        }
    }

    /**
     * Sets the name
     *
     * @param string $name
     * @return Customer
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Gets the name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets the email address
     *
     * @param string $email
     * @return Customer
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Gets the email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Sets the documents array
     *
     * @param array $documents
     * @return Customer
     */
    public function setDocuments(array $documents)
    {
        $this->documents = $documents;

        return $this;
    }

    /**
     * Gets the documents
     *
     * @return Document[]
     */
    public function getDocuments()
    {
        return $this->documents;
    }

    /**
     * Sets the phones array
     *
     * @param array $phones
     * @return Customer
     */
    public function setPhones(array $phones)
    {
        $this->phones = $phones;

        return $this;
    }

    /**
     * Gets the phones
     * @return Phone[]
     */
    public function getPhones()
    {
        return $this->phones;
    }
}
