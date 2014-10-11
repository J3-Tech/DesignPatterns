<?php

namespace Pizza\Factory;

class ConcreteCreator extends Creator
{
    public function create($type)
    {
        $class='Pizza\\Pizza\\'.ucfirst($type).'Pizza';

        return new $class;
    }
}
