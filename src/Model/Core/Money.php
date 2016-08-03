<?php

namespace Wambo\Checkout\Model\Core;

use Wambo\Core\ValueObject\ValueObjectInterface;
use Wambo\Core\ValueObject\ValueObjectTrait;

/**
 * Class Money
 * @package Wambo\Checkout\Model\Core
 */
class Money implements ValueObjectInterface
{
    use ValueObjectTrait;

    /**
     * @var float
     */
    private $amount;

    /**
     * @var Currency
     */
    private $currency;

    /**
     * Money constructor.
     * @param float $amount
     * @param Currency $currency
     */
    public function __construct(float $amount, Currency $currency)
    {
        $this->amount = $amount;
        $this->currency = $currency;
    }

    /**
     * @return string
     */
    public function getValue() : string
    {
        $value = $this->amount . $this->currency;
        return $value;
    }

    public function __toString()
    {
        return $this->amount . $this->currency->getSymbol();
    }
}