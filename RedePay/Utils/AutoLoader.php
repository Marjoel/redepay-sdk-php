<?php
/**
 * @author Marjoel Moreira <marjoel@marjoel.com>
 * @license https://www.gnu.org/licenses/gpl-3.0.en.html
 */

$directory = substr(__DIR__, 0, -6);

$mapping = array(
    "RedePay\RedePay" => $directory . "/RedePay.php",
    "RedePay\Address\Address" => $directory . "/Address/Address.php",
    "RedePay\Customer\Customer" => $directory . "/Customer/Customer.php",
    "RedePay\Document\Document" => $directory . "/Document/Document.php",
    "RedePay\History\History" => $directory . "/History/History.php",
    "RedePay\Item\Item" => $directory . "/Item/Item.php",
    "RedePay\Order\Order" => $directory . "/Order/Order.php",
    "RedePay\Order\OrderBuilder" => $directory . "/Order/OrderBuilder.php",
    "RedePay\Order\OrderHandler" => $directory . "/Order/OrderHandler.php",
    "RedePay\Order\Request\OrderCreate" => $directory . "/Order/Request/OrderCreate.php",
    "RedePay\Order\Request\OrderGet" => $directory . "/Order/Request/OrderGet.php",
    "RedePay\Payment\Payment" => $directory . "/Payment/Payment.php",
    "RedePay\Phone\Phone" => $directory . "/Phone/Phone.php",
    "RedePay\Settings\Settings" => $directory . "/Settings/Settings.php",
    "RedePay\Shipping\Shipping" => $directory . "/Shipping/Shipping.php",
    "RedePay\Shipping\ShippingBuilder" => $directory . "/Shipping/ShippingBuilder.php",
    "RedePay\ShoppingCartRecovery\ShoppingCartRecovery" =>
        $directory . "/ShoppingCartRecovery/ShoppingCartRecovery.php",
    "RedePay\Tracking\Tracking" => $directory . "/Tracking/Tracking.php",
    "RedePay\Tracking\TrackingHandler" => $directory . "/Tracking/TrackingHandler.php",
    "RedePay\Tracking\TrackingBuilder" => $directory . "/Tracking/TrackingBuilder.php",
    "RedePay\Tracking\Request\TrackingCreate" => $directory . "/Tracking/Request/TrackingCreate.php",
    "RedePay\Tracking\Request\TrackingDelete" => $directory . "/Tracking/Request/TrackingDelete.php",
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
    "RedePay\Utils\RemoveMask" => $directory . "/Utils/RemoveMask.php",
    "RedePay\Utils\RequestInterface" => $directory . "/Utils/RequestInterface.php",
    "RedePay\Utils\Validation\CpfValidator" => $directory . "/Utils/Validation/CpfValidator.php"
);

spl_autoload_register(function ($class) use ($mapping) {
    if (isset($mapping[$class])) {
        require_once $mapping[$class];
    }
}, true);
