<?php

namespace Supermarket;

class OfferSpecialCase implements Offer
{
    private $multiDiscountOffer;

    /**
     * OfferSpecialCase constructor.
     *
     * @param array $multiDiscountOffer
     * 
     * 
     */
    public function __construct(array $multiDiscountOffer)
    {
       // $multiDiscountOffer = arsort($multiDiscountOffer);
        $this->multiDiscountOffer = $multiDiscountOffer;
    }

    /**
     * @getDiscount
     */
    public function getDiscount(float $unitPrice, float $quantity): float
    {
        $discount = 0.0;
        foreach ($this->multiDiscountOffer as $sku => $discountData) {
            $this->amount = $sku;
            $this->price =  $discountData;
            if ($quantity >= $this->amount) {
                $discount = intdiv($quantity, $this->amount) *
                    ($this->price - $this->amount * $unitPrice);
            }
            
        }
        return $discount;
    }
}
