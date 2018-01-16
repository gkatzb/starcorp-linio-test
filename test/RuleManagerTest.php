<?php

use Src\RuleManager;
use Src\Rules\IT;
use Src\Rules\Linio;
use Src\Rules\Linianos;

class RuleManagerTest extends PHPUnit\Framework\TestCase
{
    public function emptyReplaceProvider()
    {
        return [
            [1, null],
            [2, null],
            [3, null]
        ];
    }

    /**
     * @dataProvider emptyReplaceProvider
     */
    public function testApplyRuleEmpty($value, $expected)
    {
        $manager = new RuleManager([new IT]);
        $this->assertEquals($expected, $manager->applyRule($value));
    }

    public function replaceProviderIT()
    {
        return [
            [1, null],
            [2, null],
            [5, IT::MESSAGE]
        ];
    }

    /**
     * @dataProvider replaceProviderIT
     */
    public function testApplyRuleIT($n, $expected)
    {
        $printer = new RuleManager([new IT]);
        $this->assertEquals($expected, $printer->applyRule($n));
    }

    /**
     * @dataProvider replaceProviderIT
     */
    public function testAddRuleIT($n, $expected)
    {
        $printer = new RuleManager();
        $printer->addRule(new IT);
        $this->assertEquals($expected, $printer->applyRule($n));
    }

    public function replaceProviderLinio()
    {
        return [
            [1, null],
            [2, null],
            [3, Linio::MESSAGE]
        ];
    }

    /**
     * @dataProvider replaceProviderLinio
     */
    public function testApplyRuleLinio($n, $expected)
    {
        $printer = new RuleManager([new Linio]);
        $this->assertEquals($expected, $printer->applyRule($n));
    }

    /**
     * @dataProvider replaceProviderLinio
     */
    public function testAddRuleLinio($n, $expected)
    {
        $printer = new RuleManager();
        $printer->addRule(new Linio);
        $this->assertEquals($expected, $printer->applyRule($n));
    }

    public function replaceProviderLinianos()
    {
        return [
            [1, null],
            [2, null],
            [15, Linianos::MESSAGE]
        ];
    }

    /**
     * @dataProvider replaceProviderLinianos
     */
    public function testApplyRuleLinianos($n, $expected)
    {
        $printer = new RuleManager([new Linianos]);
        $this->assertEquals($expected, $printer->applyRule($n));
    }

    /**
     * @dataProvider replaceProviderLinianos
     */
    public function testAddRuleLinianos($n, $expected)
    {
        $printer = new RuleManager();
        $printer->addRule(new Linianos);
        $this->assertEquals($expected, $printer->applyRule($n));
    }
}