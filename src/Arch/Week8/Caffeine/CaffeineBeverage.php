<?php

namespace Caffeine;

abstract class CaffeineBeverage
{
	public final function prepareRecipe()
	{
		$this->boilWater()
			 ->pour();
	}

	private function boilWater()
	{
		echo "boil water\n";

		return $this;
	}

	private function pour()
	{
		echo "pour\n";

		return $this;
	}

	public function brew();
}