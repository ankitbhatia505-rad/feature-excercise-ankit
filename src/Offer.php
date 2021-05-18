<?php

namespace Supermarket;

interface Offer
{
    /**
     * @param float $unitPrice
     * @param float $quantity
     * @param array $specialDiscount
     * @return float
     */
    public function getDiscount(float $unitPrice, float $quantity): float;
}
