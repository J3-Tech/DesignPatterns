<?php

namespace Player;

use Player\PlayableBehavior\IPlayableBehavior;

abstract class AbstractPlayer
{
	private $playableBehavior;

	public function __construct()
	{
		$this->setPlayableBehavior($this->createPlayableBehavior());
	}

	public function play()
	{
		if($this->playableBehavior instanceof IPlayableBehavior){
			$base=$this->playableBehavior->play();
			$items=explode('\\',get_called_class());
			$type=str_replace("Player"," is",end($items));

			return "{$type} {$base}";
		}

		return null;
	}

	public function stop()
	{
		return "Stop the player";
	}

	public function setPlayableBehavior(IPlayableBehavior $playableBehavior)
	{
		$this->playableBehavior=$playableBehavior;

		return $this;
	}

	protected abstract function createPlayableBehavior();
}