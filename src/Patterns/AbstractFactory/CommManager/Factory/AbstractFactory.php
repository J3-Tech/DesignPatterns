<?php

namespace CommManager\Factory;

abstract class AbstractFactory
{
    protected static $instance;

    private function __construct() { }

    private function __clone() { }

    public static function getInstance()
    {
        if (!self::$instance) {
            $class=get_called_class();
            self::$instance=new $class();
        }

        return self::$instance;
    }

    abstract public function createTask();
    abstract public function createAppointment();
}
