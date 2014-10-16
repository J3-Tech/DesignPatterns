<?php

namespace Type\Collection;

interface IList
{
    public function getCount();
    public function add($item);
    public function remove($item);
}
