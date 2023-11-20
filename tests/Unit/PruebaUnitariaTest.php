<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class PruebaUnitariaTest extends TestCase
{
   public function suma ($a, $b) {
        
        return $a + $b;
    } 
    /**
     * A basic unit test example.
     */
    public function test_example(): void
    {
        $this->assertFalse($this->suma (2,2) == 5);
    }
}
