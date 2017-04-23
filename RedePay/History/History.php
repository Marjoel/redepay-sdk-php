<?php

namespace RedePay\History;

use RedePay\Utils\Fillable;

/**
 * Class History
 *
 * @author Marjoel Moreira <marjoel@marjoel.com>
 * @license https://www.gnu.org/licenses/gpl-3.0.en.html
 */
class History
{
    /**
     * Traits
     */
    use Fillable;

    /**
     * The date
     *
     * @var string
     */
    private $date;

    /**
     * The status
     *
     * @var string
     */
    private $status;

    /**
     * The ID
     *
     * @var string
     */
    private $id;

    /**
     * The value
     *
     * @var string
     */
    private $value;

    /**
     * History constructor.
     *
     * @param array|null $data The default data to be filled in the current History object
     */
    public function __construct(array $data = null)
    {
        if (isset($data)) {
            $this->fill($data);
        }
    }

    /**
     * Gets the date
     *
     * @return string
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Gets the status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Gets the ID
     *
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Gets the value
     *
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }
}
