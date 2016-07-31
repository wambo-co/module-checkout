<?php
namespace Wambo\Checkout\Model;

use PHPUnit\Framework\TestCase;
use Wambo\Checkout\Model\Cart\CartInterface;
use Wambo\Checkout\Model\Payment\PaymentInterface;
use Wambo\Checkout\Model\Shipment\ShipmentInterface;

class OrderTest extends TestCase
{

    /**
     * @Test
     * Create a new Order (EntityObject)
     *
     * A Order is always composed of:
     *  - Cart
     *  - Payment
     *  - Shipment
     */
    public function test_create_a_new_order()
    {
        //arrange
        /** @var CartInterface $cart */
        $cart = $this->createMock(CartInterface::class);
        /** @var PaymentInterface $payment */
        $payment = $this->createMock(PaymentInterface::class);
        /** @var ShipmentInterface $shipment */
        $shipment = $this->createMock(ShipmentInterface::class);

        // act
        $order = new Order($cart, $payment, $shipment);
        $orderId = $order->getId();

        // assert
        $this->assertNotNull($orderId);
    }
}