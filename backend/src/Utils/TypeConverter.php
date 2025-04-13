<?php

namespace App\Utils;

class TypeConverter
{
    public static function stringToFloat(string $value): float
    {
        return (float) str_replace(',', '.', $value);
    }
}