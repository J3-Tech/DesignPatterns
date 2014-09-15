<?php

namespace Pizza\Pizza;

interface PizzaInterface
{
	function bake();
	function prepare();
	function cut();
	function box();
}