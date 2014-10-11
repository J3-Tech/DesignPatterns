<?php

namespace Caffeine;

abstract class CaffeineBeverage
{
    final public function prepareRecipe()
    {
        $this->boilWater()
             ->pour();
    }

    private function boilWater()
    {
        echo "boil water\n";

        return $this;
    }

    private function pour()
    {
        echo "pour\n";

        return $this;
    }

    public function brew();
}
