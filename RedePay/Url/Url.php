<?php

namespace RedePay\Url;

/**
 * Class Url
 *
 * @author Marjoel Moreira <marjoel@marjoel.com>
 * @license https://www.gnu.org/licenses/gpl-3.0.en.html
 */
class Url
{
    /**
     * Traits
     */
    use \RedePay\Utils\Fillable;

    /**
     * Enum constants
     */
    const TYPE_CANCEL             = 'cancel';
    const TYPE_NOTIFICATION       = 'notification';
    const TYPE_ORDER_NOTIFICATION = 'orderNotification';
    const TYPE_REDIRECT           = 'redirect';

    /**
     * The URL type
     *
     * @var string
     */
    private $kind;

    /**
     * The URL
     *
     * @var string
     */
    private $url;

    /**
     * Url constructor.
     *
     * @param array|null $data The default data to be filled in the current Url object
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
     * @return Url
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
     * Sets the url
     *
     * @param string $url
     * @return Url
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Gets the url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }
}
