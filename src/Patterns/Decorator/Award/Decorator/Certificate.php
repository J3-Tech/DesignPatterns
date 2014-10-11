<?php

namespace Award\Decorator;

use Award\Sticker;

class Certificate extends AwardDecorator
{
    public function __construct(Sticker $sticker)
    {
        parent::__construct($sticker);
        $this->description='Certificate';
    }

    public function getDescription()
    {
        return "{$this->sticker->getDescription()},  {$this->description}";
    }
}
