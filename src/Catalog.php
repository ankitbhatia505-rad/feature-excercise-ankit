<?php

namespace Supermarket;

class Catalog
{
    private $itemsPrices;

    /**
     * Catalog constructor.
     *
     * @param array $itemsPrices
     */
    public function __construct(array $itemsPrices)
    {
        $this->itemsPrices = $itemsPrices;
    }
    
    /**
     * 
     *
     * @param string $sku
     */
    public function getUnitPrice(string $sku): float
    {
        return ($this->itemsPrices[$sku] ?? 0);
    }
}
