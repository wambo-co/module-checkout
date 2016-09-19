<?php

namespace Wambo\Checkout\Model\Cart;

interface CartInterface
{
    public function getTotal() : TotalInterface;
}