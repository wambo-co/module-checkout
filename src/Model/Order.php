<?php

namespace Wambo\Checkout\Model;

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
}