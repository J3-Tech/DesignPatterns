<?php

namespace Award\Decorator;

use Award\Sticker;

class Sticker extends AbstractDecorator
{
    public function __construct(Sticker $sticker)
    {
        parent::__construct($sticker);
        $this->description='Book';
    }
}
