<?php

namespace Player\PlayableBehavior;

class PlayableHeadphone implements IPlayableBehavior
{
	public function play()
	{
		return "playing with headphone";
	}
}