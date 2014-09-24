<?php

namespace Connection;

class Connection
{

    private static $instance;

    private function __construct()
    {
    }

    private function __clone() { }

    public static function getInstance()
    {
        if (!self::$instance) {
            self::$instance=new \PDO("mysql:host=127.0.0.1;dbname=hotwire", 'root', null);
        }

        return self::$instance;
    }
}
