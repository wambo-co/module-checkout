<?php

namespace Wambo\Checkout\Model\Cart;


class Cart implements CartInterface
{
    /**
     * @var array
     */
    private $items;

    public function __construct()
    {
        $this->items = [];
    }

    public function add(CartItemInterface $item)
    {
        $key = $item->getSku()->__toString();
        if(array_key_exists($key, $this->items)){
            $currentQty = $this->items[$key]->getQty();
            $newQty = $currentQty + $item->getQty();
        }else{

        }
    }
}