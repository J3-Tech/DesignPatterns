<?php

namespace Type\Collection;

abstract class AbstractList implements IList
{
    protected $items=array();

    public function getCount()
    {
        return count($items);
    }

    public function add($item)
    {
        $this->items[]=$item;

        return $this;
    }

    public function remove($item)
    {
        if ($key=array_search($item, $this->items)) {
            unset($this->items[$key]);
        }

        return $this;
    }

    abstract public function createIterator();
}
