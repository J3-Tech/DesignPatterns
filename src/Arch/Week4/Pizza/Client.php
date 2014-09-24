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
                echo nl2br(ucfirst($pizza->prepare()));
                echo nl2br(ucfirst($pizza->bake()));
                echo nl2br(ucfirst($pizza->cut()));
                echo nl2br(ucfirst($pizza->box()));
                echo nl2br("\n");
            }
        }
    }
}
