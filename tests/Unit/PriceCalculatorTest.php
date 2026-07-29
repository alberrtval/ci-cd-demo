<?php

namespace Tests\Unit;

use App\Services\PriceCalculator;
use PHPUnit\Framework\TestCase;

class PriceCalculatorTest extends TestCase
{
    public function test_aplica_descuento_correctamente(): void
    {
        $calc = new PriceCalculator;

        $this->assertEquals(90.00, $calc->applyDiscount(100, 10));
    }

    public function test_sin_descuento_devuelve_el_precio_original(): void
    {
        $calc = new PriceCalculator;

        $this->assertEquals(50.00, $calc->applyDiscount(50, 0));
    }
}
