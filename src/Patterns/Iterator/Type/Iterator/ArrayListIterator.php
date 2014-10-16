<?php

namespace Type\Iterator;

use Type\Collection\ArrayList;

class ArrayListIterator implements IteratorInterface
{
    public function __construct(ArrayList $arrayList)
    {
        $this->arrayList=$arrayList;
    }

    public function getFirst()
    {

    }

    public function getNext()
    {

    }

    public function isDone()
    {

    }

    public function getCurrentItem()
    {

    }
}
