<?php

$directory = substr(__DIR__, 0, -6);

$mapping = array(
    "RedePay\RedePay" => $directory . "/RedePay.php",
    "RedePay\Address\Address" => $directory . "/Address/Address.php",
    "RedePay\Customer\Customer" => $directory . "/Customer/Customer.php",
    "RedePay\Document\Document" => $directory . "/Document/Document.php",
    "RedePay\History\ReversalHistory" => $directory . "/History/ReversalHistory.php",
    "RedePay\History\StatusHistory" => $directory . "/History/StatusHistory.php",
    "RedePay\History\TransactionHistory" => $directory . "/History/TransactionHistory.php",
    "RedePay\Item\Item" => $directory . "/Item/Item.php",
    "RedePay\Order\Order" => $directory . "/Order/Order.php",
    "RedePay\Order\OrderBuilder" => $directory . "/Order/OrderBuilder.php",
    "RedePay\Order\OrderHandler" => $directory . "/Order/OrderHandler.php",
    "RedePay\Order\Request\OrderCreate" => $directory . "/Order/Request/OrderCreate.php",
    "RedePay\Order\Request\OrderGet" => $directory . "/Order/Request/OrderGet.php",
    "RedePay\Phone\Phone" => $directory . "/Phone/Phone.php",
    "RedePay\Settings\Settings" => $directory . "/Settings/Settings.php",
    "RedePay\Shipping\Shipping" => $directory . "/Shipping/Shipping.php",
    "RedePay\Shipping\ShippingBuilder" => $directory . "/Shipping/ShippingBuilder.php",
    "RedePay\ShoppingCartRecovery\ShoppingCartRecovery" => $directory . "/ShoppingCartRecovery/ShoppingCartRecovery.php",
    "RedePay\Transaction\Transaction" => $directory . "/Transaction/Transaction.php",
    "RedePay\Transaction\TransactionBuilder" => $directory . "/Transaction/TransactionBuilder.php",
    "RedePay\Transaction\TransactionHandler" => $directory . "/Transaction/TransactionHandler.php",
    "RedePay\Transaction\Request\TransactionGet" => $directory . "/Transaction/Request/TransactionGet.php",
    "RedePay\Url\Url" => $directory . "/Url/Url.php",
    "RedePay\Utils\AbstractHandler" => $directory . "/Utils/AbstractHandler.php",
    "RedePay\Utils\CaseConverter" => $directory . "/Utils/CaseConverter.php",
    "RedePay\Utils\Client" => $directory . "/Utils/Client.php",
    "RedePay\Utils\Fillable" => $directory . "/Utils/Fillable.php",
    "RedePay\Utils\DateFormatter" => $directory . "/Utils/DateFormatter.php",
    "RedePay\Utils\RequestInterface" => $directory . "/Utils/RequestInterface.php",
);

spl_autoload_register(function ($class) use ($mapping) {
    if (isset($mapping[$class])) {
        require_once $mapping[$class];
    }
}, true);
