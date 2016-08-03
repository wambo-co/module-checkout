<?php

namespace Wambo\Checkout\Model\Cart;

use Wambo\Checkout\Model\Core\Money;
use Wambo\Checkout\Model\Core\Qty;
use Wambo\Checkout\Model\Core\SKU;
use Wambo\Core\ValueObject\ValueObjectInterface;
use Wambo\Core\ValueObject\ValueObjectTrait;

class CartItem implements ValueObjectInterface
{
    use ValueObjectTrait;

    private $sku;
    private $qty;
    private $price;

    public function __construct(SKU $sku, Qty $qty, Money $price)
    {
        $this->sku = $sku;
        $this->qty = $qty;
        $this->price = $price;
    }

    public function getValue()
    {
        $value = $this->sku . $this->qty . $this->price;
        return $value;
    }
}