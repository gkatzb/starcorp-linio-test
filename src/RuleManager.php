<?php


namespace Src;

use Src\Rules\Rule;

class RuleManager
{
    private $rules = [];

    public function __construct($rules = [])
    {
        foreach ($rules as $rule) {
            $this->addRule($rule);
        }
    }

    public function addRule(Rule $rule)
    {
        $this->rules[] = $rule;
    }

    public function executeRule($from = 1, $to = 100)
    {
        $list = range($from, $to);
        $rules = $this->processRule($list);

        foreach ($rules as $rule) {
            if (!is_null($rule)) {
                echo $rule . PHP_EOL;
            }
        }
    }

    private function processRule($list)
    {
        return array_map(function ($value) {
            return $this->applyRule($value);
        }, $list);
    }

    public function applyRule($value)
    {
        foreach ($this->rules as $rule) {
            if ($rule->isValid($value)) {
                return $rule->getRule();
            }
        }

        return null;
    }
}