<?php

namespace Connection;

class Connection
{

    private static $instance;

    private function __construct()
    {
        echo "\nThis displays only once\n\n";
    }

    private function __clone() { }

    public static function getInstance()
    {
        if (!self::$instance) {
            self::$instance=new self();
        }

        return self::$instance;
    }
}
