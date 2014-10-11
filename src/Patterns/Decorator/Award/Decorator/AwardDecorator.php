<?php

namespace Award\Decorator;

use Award\Sticker;
use Award\AbstractPrize;

abstract class AwardDecorator extends AbstractPrize
{
    protected $sticker;
    protected $description;

    public function __construct(Sticker $sticker)
    {
        $this->sticker=$sticker;
    }
}
