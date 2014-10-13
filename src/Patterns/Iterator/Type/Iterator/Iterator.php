<?php

namespace Type\Iterator;

interface IteratorInterface
{
	function getFirst();
	function getNext();
	function isDone();
	function getCurrentItem();
}