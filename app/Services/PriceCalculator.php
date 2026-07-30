<?php

namespace App\Services;

class PriceCalculator
{
    public function applyDiscount(float $price, float $percent): float
    {
        $discount = $price * ($percent / 100 );

        return round($price - $discount, 2);
    }
}
