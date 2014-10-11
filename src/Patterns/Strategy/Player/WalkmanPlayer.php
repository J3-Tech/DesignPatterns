<?php

namespace Player;

use Player\PlayableBehavior\PlayableHeadphone;

class WalkmanPlayer extends AbstractPlayer
{
    protected function createPlayableBehavior()
    {
        return new PlayableHeadphone();
    }
}
