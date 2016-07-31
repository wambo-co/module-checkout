<?php

namespace Wambo\Checkout\Model;

use Wambo\Checkout\Model\Cart\CartInterface;
use Wambo\Checkout\Model\Payment\PaymentInterface;
use Wambo\Checkout\Model\Shipment\ShipmentInterface;
use Wambo\Core\EntityObject\EntityObjectInterface;

class Order implements EntityObjectInterface
{
    /**
     * @var CartInterface
     */
    private $cart;

    /**
     * @var PaymentInterface
     */
    private $payment;

    /**
     * @var ShipmentInterface
     */
    private $shipment;

    public function __construct(CartInterface $cart, PaymentInterface $payment, ShipmentInterface $shipment)
    {
        $this->cart = $cart;
        $this->payment = $payment;
        $this->shipment = $shipment;
    }

    public function getId()
    {
        // TODO: Implement getId() method.
        return 23;
    }

    /**
     * @return PaymentInterface
     */
    public function getPayment()
    {
        return $this->payment;
    }

    /**
     * @return ShipmentInterface
     */
    public function getShipment()
    {
        return $this->shipment;
    }
}