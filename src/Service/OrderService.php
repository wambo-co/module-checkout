<?php

namespace Wambo\Checkout\Service;

use Wambo\Checkout\Model\Cart\CartInterface;
use Wambo\Checkout\Model\Order\OrderInterface;

class OrderFactoryService
{

    public function createOrder(CartInterface $cart) : OrderInterface
    {
        $totals = $cart->getItems();

    }
}