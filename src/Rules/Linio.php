<?php


namespace Src\Rules;


class Linio implements Rule
{
    const MESSAGE = "Linio";

    public static function isValid($value)
    {
        return (($value % 3) == 0);
    }

    public static function getRule()
    {
        return self::MESSAGE;
    }
}