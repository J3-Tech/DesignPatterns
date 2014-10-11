<?php

namespace Nav;

class Menu extends CompositeMenu
{
    public function __construct()
    {
        $this->text='Menu';
    }

    public function __toString()
    {
        return $this->text;
    }
}
