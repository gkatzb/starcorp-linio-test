<?php

use PHPUnit\Framework\TestCase;
use Src\Rules\Linianos;

class LinianosTest extends TestCase
{
    public function replaceProvider()
    {
        return [
            [1, false],
            [2, false],
            [3, false],
            [4, false],
            [5, false],
            [15, true]
        ];
    }

    /**
     * @dataProvider replaceProvider
     */
    public function testIsValid($value, $expected)
    {
        $rule = new Linianos();
        $this->assertEquals($expected, $rule->isValid($value));
    }

    public function testGetRule()
    {
        $rule = new Linianos();
        $this->assertEquals($rule::MESSAGE, $rule->getRule());
    }

}