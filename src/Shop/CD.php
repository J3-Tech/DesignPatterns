<?php

namespace Shop;

class CD extends ShopProduct
{
    private $playLength;

    public function __construct($title, $producerMainName, $producerFirstName, $price, $discount, $playLength)
    {
        parent::__construct($title, $producerMainName, $producerFirstName, $price, $discount);
        $this->playLength = $playLength;
    }

    public function getSummaryLine()
    {
        $base = parent::getSummaryLine();

        return "{$base} - {$this->playLength}";
    }
}
