<?php

namespace Player\PlayableBehavior;

class PlayableSpeaker implements IPlayableBehavior
{
    public function play()
    {
        return "playing with speaker";
    }
}
