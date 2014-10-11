<?php

namespace Pizza\Pizza;

interface PizzaInterface
{
    public function bake();
    public function prepare();
    public function cut();
    public function box();
}
