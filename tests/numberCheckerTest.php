<?php

use PHPUnit\Framework\TestCase;

// Ensure class is loaded via bootstrap/autoload
require_once __DIR__ . '/../src/NumberChecker.php';


class NumberCheckerTest extends TestCase {


// Test cases for the isEven() method.
     /**
      * @dataProvider provideEvenNumbers
      */
    public function testIsEvenReturnsTrueForEvenNumbers(int $number) {
        $checker = new NumberChecker($number);
        $this->assertTrue($checker->isEven(), "Testing that {$number} is correctly identified as even.");
    }

    public static function provideEvenNumbers(): array {
        return [
            'positive_even' => [4],
            'zero_is_even' => [0],
            'negative_even' => [-2],
        ];
    }

    /**
     * @dataProvider provideOddNumbers
     */
    public function testIsEvenReturnsFalseForOddNumbers(int $number) {
        $checker = new NumberChecker($number);
        $this->assertFalse($checker->isEven(), "Testing that {$number} is correctly identified as not even (odd).");
    }

    public static function provideOddNumbers(): array {
        return [
            'positive_odd' => [3],
            'negative_odd' => [-5],
        ];
    }


// Test cases for the isPositive() method.
    /**
     * @dataProvider providePositiveNumbers
     */
    public function testIsPositiveReturnsTrueForPositiveNumbers(int $number) {
        $checker = new NumberChecker($number);
        $this->assertTrue($checker->isPositive(), "Testing that {$number} is correctly identified as positive.");
    }

    public static function providePositiveNumbers(): array {
        return [
            'positive_number' => [10],
            'smallest_positive' => [1],
        ];
    }

    /**
     * @dataProvider provideNonPositiveNumbers
     */
    public function testIsPositiveReturnsFalseForNonPositiveNumbers(int $number) {
        $checker = new NumberChecker($number);
        $this->assertFalse($checker->isPositive(), "Testing that {$number} is correctly identified as not positive.");
    }

    public static function provideNonPositiveNumbers(): array {
        return [
            'zero' => [0],
            'negative_number' => [-7],
            'large_negative' => [-100],
        ];
    }
}