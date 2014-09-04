<?php

namespace Math;

class Arithmetic implements ITest
{
    private $number;

    public function __construct($number)
    {
        $this->number=$number;
    }

    public function square()
    {
        return pow($this->number, 2);
    }
}
