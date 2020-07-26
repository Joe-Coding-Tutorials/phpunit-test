<?php

use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{

  public function testCanAddTwoNumbers(): void
  {
    $calculator = new Calculator();
    $expected = 7;

    // Check if the add function works by adding two numbers and testing the output
    $this->assertEquals($expected, $calculator->add(6, 1), "Adding function is not working");
  }
}
