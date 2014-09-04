<?php

namespace RedPlate;

class RedPlate
{
    private static $base;

    public static function setBase($base)
    {
        self::$base=$base;
    }

    public static function extend($template)
    {
        require_once str_replace('::',__DIR__."/../../app/Templates/",$template);
    }
}
