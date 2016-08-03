<?php
namespace Wambo\Checkout\Model\Core;

use Wambo\Core\ValueObject\ValueObjectInterface;
use Wambo\Core\ValueObject\ValueObjectTrait;

/**
 * Class SKU
 */
class SKU implements ValueObjectInterface
{
    use ValueObjectTrait;

    /**
     * @var string
     */
    private $sku;

    /**
     * SKU constructor.
     * @param string $sku
     * @throws SKUException
     */
    public function __construct(string $sku)
    {
        if(preg_match('/[a-z0-9\-_]/', $sku)){
            throw new SKUException('invalid characters');
        }

        if(strlen($sku) < 2){
            throw new SKUException('too short');
        }

        if(strlen($sku) > 32){
            throw new SKUException('too long');
        }

        $this->sku = $sku;
    }

    /**
     * @return string
     */
    public function getValue() : string
    {
        return $this->sku;
    }

    /**
     * @return string
     */
    public function __toString() : string
    {
        return $this->sku;
    }
}