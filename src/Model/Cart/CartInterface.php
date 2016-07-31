<?php

namespace Wambo\Checkout\Model\Cart;

interface CartInterface
{
    /**
     * @return CartItemCollectionInterface
     */
    public function getItems() : CartItemCollectionInterface;
}