<?php

namespace Connection;

class Connection
{

    private static $instance;

    private function __construct() { }

    private function __clone() { }

    public static function getInstance()
    {
        if (!self::$instance) {
            self::$instance=new Connection();
        }

        return self::$instance;
    }
}
