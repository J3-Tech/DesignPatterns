<?php

namespace Award;

class Sticker extends AbstractPrize
{
    public function __construct()
    {
        $this->description='Sticker';
    }

    public function getDescription()
    {
        return $this->description;
    }
}
