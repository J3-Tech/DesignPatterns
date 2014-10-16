<?php

namespace Factory;

class CommandFactory
{

    private static $instance;

    private function __construct() { }

    private function __clone() { }

    public function create($file)
    {
        $class=str_replace("src/", null, $file);
        $class=str_replace(".php", null, $class);
        $class=str_replace("/", "\\", $class);

        return new $class();
    }

    public static function getInstance()
    {
        if (!self::$instance) {
            self::$instance=new CommandFactory();
        }

        return self::$instance;
    }
}
