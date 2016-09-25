<?php
namespace Wambo\Checkout\Service;

use PHPUnit\Framework\TestCase;
use Wambo\Checkout\Model\Cart\CartItemInterface;
use Wambo\Core\Model\SKU;

class OrderItemServiceTest extends TestCase
{
    public function test_create_orderItem_from_cartItem()
    {
        $cartItem = $this->createMock(CartItemInterface::class);
        $cartItem->method('getSKU')->willReturn(
            $this->createMock(SKU::class)
        );
        $orderItem = OrderItemService::createOrderItem($cartItem);
    }
}