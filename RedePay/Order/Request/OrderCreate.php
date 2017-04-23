<?php

namespace RedePay\Order\Request;

use RedePay\Order\Order;
use \RedePay\Utils\RequestInterface;

/**
 * Class OrderCreate
 *
 * @author Marjoel Moreira <marjoel@marjoel.com>
 * @license https://www.gnu.org/licenses/gpl-3.0.en.html
 */
class OrderCreate implements RequestInterface
{
    /**
     * The Order instance
     *
     * @var Order
     */
    private $order;

    /**
     * OrderCreate constructor.
     *
     * @param Order $order
     */
    public function __construct(Order $order)
    {
        $this->order = $order;
    }

    /**
     * {@inheritdoc}
     */
    public function getPayload()
    {
        $reference = $this->order->getReference();
        $discount = (int)number_format($this->order->getDiscount(), 2, '', '');
        $settings = $this->handleSettings($this->order);
        $customer = $this->handleCustomer($this->order);
        $shipping = $this->handleShipping($this->order);
        $items = $this->handleItems($this->order);
        $urls = $this->handleUrls($this->order);
        
        $parameters = array(
            "reference" => $reference,
            "discount" => $discount,
            "settings" => $settings,
            "customer" => $customer,
            "shipping" => $shipping,
            "items" => $items,
            "urls" => $urls
        );

        if (!$discount || $discount == 0) {
            unset($parameters["discount"]);
        }

        if (empty($customer)) {
            unset($parameters["customer"]);
        }

        if (empty($shipping)) {
            unset($parameters["shipping"]);
        }

        if (empty($urls)) {
            unset($parameters["urls"]);
        }
        return json_encode($parameters, JSON_UNESCAPED_UNICODE);
    }

    /**
     * {@inheritdoc}
     */
    public function getPath()
    {
        return sprintf("%s/orders", $this->getApiUrl());
    }

    /**
     * Gets the data
     *
     * @return null
     */
    public function getData()
    {
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function getMethod()
    {
        return self::HTTP_POST;
    }

    /**
     * {@inheritdoc}
     */
    public function getApiUrl()
    {
        return self::API_URL;
    }

    /**
     * Parses the Customer object
     *
     * @param Order $order
     * @return array
     */
    private function handleCustomer(Order $order)
    {
        if ($order->getCustomer()) {
            $name = $order->getCustomer()->getName();
            $email = $order->getCustomer()->getEmail();
            $documents = $this->handleDocuments($order);
            $phones = $this->handlePhones($order);

            $parameters = array(
                "name" => $name,
                "email" => $email,
                "documents" => $documents,
                "phones" => $phones
            );
            return $parameters;
        } else {
            // TODO: throw exception
        }
    }

    /**
     * Parses the Settings object
     *
     * @param Order $order
     * @return array
     */
    private function handleSettings(Order $order)
    {
        if ($order->getSettings()) {
            $expiresAt = $order->getSettings()->getExpiresAt();
            $maxInstallments = $order->getSettings()->getMaxInstallments();
            $attempts = $order->getSettings()->getAttempts();
            $shoppingCartRecovery = $this->handleShoppingCartRecovery($order);

            $parameters = array(
                "expiresAt" => $expiresAt,
                "maxInstallments" => $maxInstallments,
                "attempts" => $attempts,
                "shoppingCartRecovery" => $shoppingCartRecovery
            );

            if (!$expiresAt) {
                unset($parameters["expiresAt"]);
            }

            if (!$attempts) {
                unset($parameters["attempts"]);
            }

            if (empty($shoppingCartRecovery)) {
                unset($parameters["shoppingCartRecovery"]);
            }
            return $parameters;
        } else {
            // TODO: throws exception
        }
    }

    /**
     * Parses the Shipping object
     *
     * @param Order $order
     * @return array
     */
    private function handleShipping(Order $order)
    {
        $cost = (int)number_format($order->getShipping()->getCost(), 2, '', '');
        $address = $this->handleAddress($order);

        $parameters = array(
            "cost" => $cost,
            "address" => $address
        );

        if (!$cost || $cost == 0) {
            unset($parameters["cost"]);
        }

        if (empty($address)) {
            unset($parameters["address"]);
        }

        return $parameters;
    }

    /**
     * Parses the Item objects
     *
     * @param Order $order
     * @return array
     */
    private function handleItems(Order $order)
    {
        $items = array();
        foreach ($order->getItems() as $key => $item) {
            $items[$key] = array(
                "id" => $item->getId(),
                "amount" => (int)number_format($item->getAmount(), 2, '', ''),
                "quantity" => $item->getQuantity(),
                "discount" => (int)number_format($item->getDiscount(), 2, '', ''),
                "description" => $item->getDescription(),
                "freight" => (int)number_format($item->getFreight(), 2, '', ''),
            );

            if (!$item->getDiscount() || $item->getDiscount() == 0) {
                unset($items[$key]["discount"]);
            }

            if (!$item->getFreight() || $item->getFreight() == 0) {
                unset($items[$key]["freight"]);
            }
        }
        return $items;
    }

    /**
     * Parses the Url objects
     *
     * @param Order $order
     * @return array
     */
    private function handleUrls(Order $order)
    {
        if ($order->getUrls()) {
            $urls = array();
            foreach ($order->getUrls() as $key => $url) {
                $urls[$key] = array(
                    "kind" => $url->getKind(),
                    "url" => $url->getUrl()
                );
            }
            return $urls;
        } else {
            // TODO: throws exception
        }
    }

    /**
     * Parses the Address object
     *
     * @param Order $order
     * @return array
     */
    private function handleAddress(Order $order)
    {
        $alias = $order->getShipping()->getAddress()->getAlias();
        $street = $order->getShipping()->getAddress()->getStreet();
        $number = $order->getShipping()->getAddress()->getNumber();
        $complement = $order->getShipping()->getAddress()->getComplement();
        $postalCode = $order->getShipping()->getAddress()->getPostalCode();
        $district = $order->getShipping()->getAddress()->getDistrict();
        $city = $order->getShipping()->getAddress()->getCity();
        $state = $order->getShipping()->getAddress()->getState();

        $parameters = array(
            "alias" => $alias,
            "street" => $street,
            "number" => $number,
            "complement" => $complement,
            "postalCode" => $postalCode,
            "district" => $district,
            "city" => $city,
            "state" => $state
        );

        if (!$alias) {
            unset($parameters["alias"]);
        }

        if (!$complement) {
            unset($parameters["complement"]);
        }
        return $parameters;
    }

    /**
     * Parses the ShoppingCartRecovery object
     *
     * @param Order $order
     * @return array
     */
    private function handleShoppingCartRecovery(Order $order)
    {
        $enable = $order->getSettings()->getShoppingCartRecovery()->getEnable();
        $firstAlert = $order->getSettings()->getShoppingCartRecovery()->getFirstAlert();
        $secondAlert = $order->getSettings()->getShoppingCartRecovery()->getSecondAlert();
        $thirdAlert = $order->getSettings()->getShoppingCartRecovery()->getThirdAlert();
        $fourthAlert = $order->getSettings()->getShoppingCartRecovery()->getFourthAlert();
        $logoUrl = $order->getSettings()->getShoppingCartRecovery()->getLogoUrl();

        $parameters = array(
            "enable" => $enable,
            "firstAlert" => $firstAlert,
            "secondAlert" => $secondAlert,
            "thirdAlert" => $thirdAlert,
            "fourthAlert" => $fourthAlert,
            "logoUrl" => $logoUrl
        );

        if (!$enable) {
            unset($parameters["enable"]);
        }

        if (!$firstAlert) {
            unset($parameters["firstAlert"]);
        }

        if (!$secondAlert) {
            unset($parameters["secondAlert"]);
        }

        if (!$thirdAlert) {
            unset($parameters["thirdAlert"]);
        }

        if (!$fourthAlert) {
            unset($parameters["fourthAlert"]);
        }

        if (!$logoUrl) {
            unset($parameters["logoUrl"]);
        }
        return $parameters;
    }

    /**
     * Parses the Phone objects
     *
     * @param Order $order
     * @return array
     */
    private function handlePhones(Order $order)
    {
        $phones = array();
        foreach ($order->getCustomer()->getPhones() as $key => $phone) {
            $phones[$key] = array(
                "kind" => $phone->getKind(),
                "number" => $phone->getNumber()
            );
        }
        return $phones;
    }

    /**
     * Parses the Document objects
     *
     * @param Order $order
     * @return array
     */
    private function handleDocuments(Order $order)
    {
        $documents = array();
        foreach ($order->getCustomer()->getDocuments() as $key => $document) {
            $documents[$key] = array(
                "kind" => $document->getKind(),
                "number" => $document->getNumber()
            );
        }
        return $documents;
    }
}
