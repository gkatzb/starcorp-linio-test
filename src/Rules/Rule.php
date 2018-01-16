<?php


namespace Src\Rules;

interface Rule
{
    public static function isValid($value);

    public static function getRule();
}