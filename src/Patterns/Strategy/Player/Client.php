<?php

namespace Player;

class Client
{
	public function __construct()
	{
		$player=new MP3Player();
		echo $player->play();
	}
}