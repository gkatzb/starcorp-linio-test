<?php


namespace Src\Rules;


class Linianos implements Rule
{
    const MESSAGE = "Linianos";

    public static function isValid($value)
    {
        return ((($value % 3) == 0) && (($value % 5) == 0));
    }

    public static function getRule()
    {
        return self::MESSAGE;
    }
}