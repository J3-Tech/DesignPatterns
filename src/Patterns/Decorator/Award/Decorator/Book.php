<?php

namespace Award\Decorator;

use Award\Sticker;

class Book extends AwardDecorator
{
    public function __construct(Sticker $sticker)
    {
        parent::__construct($sticker);
        $this->description='Book';
    }

    public function getDescription()
    {
        return "{$this->sticker->getDescription()}, {$this->description}";
    }
}
