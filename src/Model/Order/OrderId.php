<?php
namespace Wambo\Checkout\Model\Order;

use Wambo\Core\ValueObject\ValueObjectInterface;
use Wambo\Core\ValueObject\ValueObjectTrait;

class OrderId implements ValueObjectInterface
{
    use ValueObjectTrait;

    /**
     * @var string
     */
    private $id;

    public function __construct(string $id)
    {
    }

    public function validate()
    {
        // TODO: validate OrderID
    }

    public function getValue() : string
    {
        return $this->id;
    }
}