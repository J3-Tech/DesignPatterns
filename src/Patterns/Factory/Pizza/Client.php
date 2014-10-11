<?php

namespace Pizza;

use Pizza\Factory\ConcreteCreator;
use Pizza\Pizza\PizzaInterface;

class Client
{
    public function __construct()
    {
        $factory=new ConcreteCreator();
        foreach (['pepperoni','cheese','veggie'] as $type) {
            $pizza=$factory->create($type);
            if ($pizza instanceof PizzaInterface) {
                echo ucfirst($pizza->prepare());
                echo ucfirst($pizza->bake());
                echo ucfirst($pizza->cut());
                echo ucfirst($pizza->box());
                echo "\n";
            }
        }
    }
}
