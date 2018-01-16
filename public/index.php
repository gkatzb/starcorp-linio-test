<?php

require __DIR__ . '/../vendor/autoload.php';

use Src\Rules\Linianos;
use Src\Rules\Linio;
use Src\Rules\IT;
use Src\RuleManager;

$rules = [
    new Linianos,
    new Linio,
    new IT,
];

$manager = new RuleManager($rules);
$manager->executeRule(1, 100);
