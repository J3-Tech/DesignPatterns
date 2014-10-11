<?php

namespace Pizza\Factory;

abstract class Creator
{
    abstract public function create($type);
}
