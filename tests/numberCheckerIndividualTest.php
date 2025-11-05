<?php

use PHPUnit\Framework\TestCase;

// Ensure class is loaded via bootstrap/autoload
require_once __DIR__ . '/../src/numberChecker.php';

final class NumberCheckerIndividualTest extends TestCase
{

    // Test isEven() for positive numbers
    public function testIsEvenWithPositiveEvenNumber(): void
    {
        $checker = new NumberChecker(6);
        $this->assertTrue($checker->isEven());
    }

    public function testIsEvenWithPositiveOddNumber(): void
    {
        $checker = new NumberChecker(7);
        $this->assertFalse($checker->isEven());
    }


    // Test isEven() for zero
    public function testIsEvenWithZero(): void
    {
        $checker = new NumberChecker(0);
        $this->assertTrue($checker->isEven());
    }
-
    // Test isEven() for negative numbers
    public function testIsEvenWithNegativeEvenNumber(): void
    {
        $checker = new NumberChecker(-8);
        $this->assertTrue($checker->isEven());
    }

    public function testIsEvenWithNegativeOddNumber(): void
    {
        $checker = new NumberChecker(-9);
        $this->assertFalse($checker->isEven());
    }

    // Test isPositive()
    public function testIsPositiveWithPositiveNumber(): void
    {
        $checker = new NumberChecker(10);
        $this->assertTrue($checker->isPositive());
    }

    public function testIsPositiveWithZero(): void
    {
        $checker = new NumberChecker(0);
        $this->assertFalse($checker->isPositive());
    }

    public function testIsPositiveWithNegativeNumber(): void
    {
        $checker = new NumberChecker(-5);
        $this->assertFalse($checker->isPositive());
    }
}
