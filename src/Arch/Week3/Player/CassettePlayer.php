<?php

namespace Player;

use Player\PlayableBehavior\PlayableSpeaker;

class CassettePlayer extends AbstractPlayer
{
    protected function createPlayableBehavior()
    {
        return new PlayableSpeaker();
    }
}
