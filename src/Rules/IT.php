<?php


namespace Src\Rules;


class IT implements Rule
{
    const MESSAGE = "IT";

    public static function isValid($value)
    {
        return (($value % 5) == 0);
    }

    public static function getRule()
    {
        return self::MESSAGE;
    }
}