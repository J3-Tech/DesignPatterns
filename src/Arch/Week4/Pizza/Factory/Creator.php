<?php

namespace Pizza\Factory;

abstract class Creator
{
	public abstract function create($type);
}