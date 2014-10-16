<?php

namespace Type\Iterator;

abstract class Iterator
{
    protected $list;

    public function __construct(IList $list)
    {
        $this->list=$list;
    }

    public function getFirst()
    {

    }

    public function getNext()
    {

    }

    public function isDone();
    public function getCurrentItem();
}
