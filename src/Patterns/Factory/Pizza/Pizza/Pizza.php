<?php

namespace Pizza\Pizza;

abstract class Pizza implements PizzaInterface
{

    private function getType()
    {
        $items=explode('\\',get_class($this));

        return str_replace('Pizza',' Pizza',end($items))."\n";
    }

    public function prepare()
    {
        return 'prepare the '.$this->getType();
    }

    public function box()
    {
        return 'box the '.$this->getType();
    }

    public function cut()
    {
        return 'cut the '.$this->getType();
    }

    public function bake()
    {
        return 'bake the '.$this->getType();
    }
}
