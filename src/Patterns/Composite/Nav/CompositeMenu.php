<?php

namespace Nav;

abstract class CompositeMenu implements INav
{
    protected $children=array();

    public function add(INav $element)
    {
        $this->children[]=$element;

        return $this;
    }

    public function remove(INav $element)
    {
        if ($key=$this->getKeyByElement($element)) {
            unset($this->children[$key]);
        }

        return $this;
    }

    public function getChild(INav $element)
    {
        if ($key=$this->getKeyByElement($element)) {
            return $this->children[$key];
        }

        return null;
    }

    public function getKeyByElement(INav $element)
    {
        foreach ($this->children as $key => $child) {
            if ($element == $child) {
                return $key;
            }
        }

        return null;
    }
}
