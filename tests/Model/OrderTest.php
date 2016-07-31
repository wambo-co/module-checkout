<?php
namespace Wambo\Checkout\Model;

use PHPUnit\Framework\TestCase;

class OrderTest extends TestCase
{

    /**
     * @Test
     * Create a new Order (EntityObject)
     *
     * A Order is always composed of:
     *  - Cart,
     *  - Payment
     *  - Shipment
     */
    public function test_create_a_new_order()
    {
        //arrange
        $cart = $this->createMock(CartInterface::class);
        $payment = $this->createMock(PaymentInterface::class);
        $shipment = $this->createMock(ShipmentInterface::class);

        // act
        $order = new Order($cart, $payment, $shipment);
        $orderId = $order->getId();

        // assert
        $this->assertNotNull($orderId);
    }
}