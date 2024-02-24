<?php
use PHPUnit\Framework\TestCase;
require 'Calculator.php';

class ParTest extends TestCase
{
    private $calculator;
 
    protected function setUp(): void
    {
        $this->calculator = new Calculator();
    }
 
    protected function tearDown(): void
    {
        $this->calculator = NULL;
    }
 
    public function testpar(): void
    {
        $result = $this->calculator->par(2);
        $this->assertEquals("par.", $result);
    }
}