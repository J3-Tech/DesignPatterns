<?php

namespace Trip;

class Client
{
	public function __construct()
	{
		$trip=new ShipTrip();
		$trip->doVisit();
		echo "\n";
		$trip=new PlaneTrip();
		$trip->doVisit();
	}
}