<?php

namespace Player;

use Player\PlayableBehavior\PlayableHeadphone;

class MP3Player extends AbstractPlayer
{
    protected function createPlayableBehavior()
    {
        return new PlayableHeadphone();
    }
}
