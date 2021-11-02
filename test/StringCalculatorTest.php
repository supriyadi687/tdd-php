<?php declare(strict_types=1);
namespace TddPhp\Test;

use PHPUnit\Framework\TestCase;
use TddPhp\StringCalculator;


final class StringCalculatorTest extends TestCase {
    private StringCalculator $systemUnderTest;

    public function setUp() : void {
        $this->systemUnderTest = new StringCalculator();
    }

    public function testAddShouldReturn0(): void {
        $this->assertEquals(0,  $this->systemUnderTest->add(""));
    }

}