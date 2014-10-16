<?php

namespace Type\Iterator;

interface Iterator
{
    public function getFirst();
    public function getNext();
    public function isDone();
    public function getCurrentItem();
}
