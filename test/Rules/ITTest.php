<?php

use PHPUnit\Framework\TestCase;
use Src\Rules\IT;

class ITTest extends TestCase
{
    public function replaceProvider()
    {
        return [
            [1, false],
            [2, false],
            [3, false],
            [4, false],
            [5, true],
            [10, true],
            [15, true],
        ];
    }

    /**
     * @dataProvider replaceProvider
     */
    public function testIsValid($value, $expected)
    {
        $rule = new IT();
        $this->assertEquals($expected, $rule->isValid($value));
    }

    public function testGetRule()
    {
        $rule = new IT();
        $this->assertEquals($rule::MESSAGE, $rule->getRule());
    }

}