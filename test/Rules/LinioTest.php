<?php

use PHPUnit\Framework\TestCase;
use Src\Rules\Linio;

class LinioTest extends TestCase
{
    public function replaceProvider()
    {
        return [
            [1, false],
            [2, false],
            [3, true],
            [4, false],
            [5, false],
            [6, true]
        ];
    }

    /**
     * @dataProvider replaceProvider
     */
    public function testIsValid($value, $expected)
    {
        $rule = new Linio();
        $this->assertEquals($expected, $rule->isValid($value));
    }

    public function testGetRule()
    {
        $rule = new Linio();
        $this->assertEquals($rule::MESSAGE, $rule->getRule());
    }

}