<?php

namespace Trip;

abstract class Trip
{
	public function doVisit()
	{
		$this->doTravel();
		$this->doReturnHome();
	}

	public function doReturnHome()
	{
		echo "returning home\n";
	}

	public abstract function doTravel();
}