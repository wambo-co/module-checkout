<?php

namespace Wambo\Checkout\Model\Core;


use Wambo\Core\ValueObject\ValueObjectInterface;
use Wambo\Core\ValueObject\ValueObjectTrait;

class Currency implements ValueObjectInterface
{
    use ValueObjectTrait;

    private $name;
    private $symbol;

    public function __construct(string $name, string $symbol)
    {
        $this->name = $name;
        $this->symbol = $symbol;
    }

    /**
     * @return string
     */
    public function getSymbol() : string
    {
        return $this->symbol;
    }

    public function getName() : string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getValue() : string
    {
        return $this->name . $this->symbol;
    }

    /**
     * @return string
     */
    public function __toString() : string
    {
        return $this->getValue();
    }
}