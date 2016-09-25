<?php
namespace Wambo\Checkout\Service;

use PHPUnit\Framework\TestCase;
use Wambo\Checkout\Model\Cart\CartInterface;
use Wambo\Checkout\Model\Cart\CartItemInterface;

class OrderServiceTest extends TestCase
{
    public function test_create_order_form_order()
    {
        $cartItem = $this->createMock(CartItemInterface::class);

        $cart = $this->createMock(CartInterface::class);
        $cart->method('getItems')->willReturn([$cartItem]);

        $order = OrderService::createOrder($cart);
    }
}